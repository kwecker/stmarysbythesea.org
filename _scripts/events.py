# -*- coding: utf-8 -*-
"""
# Calendar Converter
# ver. 0.3a
#
# <tr class="upcoming-event">
#     <td class="upcoming-event__date">
#         <p class="date__day">THU</p>
#         <p class="date__date">8<sup>th</sup></p>
#     </td>
#     <td class="upcoming-event__info">
#         <h4 class="info__title">Choir Rehearsal</h4>
#         <p class="info__location">Edwards Hall</p>
#     </td>
#     <td class="upcoming-event__time">7:30PM&ndash;8:30PM</td>
# </tr>
"""

calendar_file="Calendar.txt"

table_html = '''<table id="{}_events" class="upcoming-events" cellpadding="0" cellspacing="0" border="0">
\t<thead>
\t\t<tr>
\t\t\t<th colspan="3"><h3 class="calendar-month">{}</h3></th>
\t\t</tr>
\t</thead>
{}</table>
'''

row_html = '''
\t<tr class="upcoming-event">
\t\t<td class="upcoming-event__date">
\t\t\t<p class="date__day">{}</p>
\t\t\t<p class="date__date">{}</p>
\t\t</td>
\t\t<td class="upcoming-event__info">{}</td>
\t\t<td class="upcoming-event__time">{}</td>
\t</tr>
'''


def get_suffix(x):
    y = int(x)%10
    if y > 3 or x == '12' or x == '13':
        y = 0

    return '<sup>{}</sup>'.format(['th','st','nd','rd'][y])


def gather_data():
    """
    Collect calendar data from provided file
        filename - String location of file. Defaults to 'Calendar.txt'.
    """

    # Open file and read lines
    with open(calendar_file) as f:
        lines = f.readlines()

    # Aquire number of months in file and run loop for that number
    num_months = int(lines.pop(0).rstrip())
    months = []

    for month in range(num_months):
        num_entries = int(lines.pop(0).rstrip())
        month_name = lines.pop(0).rstrip()

        entries = []
        for i in range(num_entries):
            entry = format_input(lines.pop(0).rstrip().split('\t'))
            entries.append(entry)

        month_data = [month_name, entries]
        print(month_name, 'collected.', len(month_data[1]), 'events.')
        months.append(month_data)

    return months


def format_input(entry):
    # Day Formating
    # Shorten day to three letters and convert to all caps
    entry[0] = entry[0][:3].upper()

    # Time Formating
    # If there is a range of time do the following
    if entry[2].find('-') is not -1:
        # replace dashes with en dashes
        entry[2] = entry[2].replace('–', '&ndash;')
        entry[2] = entry[2].replace('-', '&ndash;')
        # shorten whole hours
        entry[2] = entry[2].replace(':00', '')

    # Description Formating
    # Replace ampersands
    entry[3] = entry[3].replace('&', '&amp;')
    # Replace apostrophies
    entry[3] = entry[3].replace('\'', '&#8217;')
    entry[3] = entry[3].replace('’', '&#8217;')
    # Replace em dashes
    entry[3] = entry[3].replace('—', '&mdash;')
    entry[3] = entry[3].replace(' – ', '&mdash;')

    return entry


def write_tables():
    months = gather_data()
    output = []

    for month in months:
        name, entries = month
        rows = ''

        for entry in entries:
            day, date, time = entry[0], entry[1], entry[2]
            info = ('\n\t\t\t' +
                    '<h4 class="info__title">{}</h4>'.format(entry[3]))
            if len(entry) > 4:
                info += ('\n\t\t\t' +
                         '<p class="info__location">{}</p>'.format(entry[4]) +
                         '\n\t\t')
            row = row_html.format(day, date + get_suffix(date), info, time)
            rows += row

        output.append(table_html.format(name.lower(), name, rows))

    with open('output.txt', 'w') as f:
        f.write('\n\n'.join(output))

    print('Done.')


if __name__ == '__main__':
    write_tables()

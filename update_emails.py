import json
import csv


with open('temp_emails.csv') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    line_count = 0
    for row in csv_reader:
        print("update wp_users SET user_email = \'"+row[13]+"\' where id=\'"+row[2]+"\';"
              )

        #update wp_users SET user_email = 'macaomarathon@yahoo.it' where id=2;


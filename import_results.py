import json
import csv


with open('temp_dataimport.csv') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=',')
    line_count = 0
    for row in csv_reader:
        print("insert into wp_wpa_result (date_created, user_id, event_id, time, garmin_id, position, "
              "age_category, gender, pending ) values "
              "(\'"+row[6]+"\',\'"+row[2]+"\',\'"+row[0]+"\',\'"+row[1]+"\',\'"+""+"\',\'"+str(0)+"\',\'"+row[3]+"\',\'"+row[5]+"\',\'"+str(0)+"\'"
              ");"
              )
        #insert into wordpress.wp_wpa_result
        #(date_created, user_id, event_id, time, garmin_id, position, age_category, gender, pending, age_grade, points_class_qual, points_soc_grup, points_soc_qual, points_indiv) values (1, 2018-10-07T13:34:35, 9, 49, 7200000, NULL, 0, S, F, 0, 27.9, 0, 0, 0, 10);


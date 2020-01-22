DUMP erstellen:
mysqldump --opt -Q -u admin -p -h localhost famArch > dump.sql

DUMP einspielen:
mysql --host=localhost --user=admin --password=admin -vvf famArch < dump.sql
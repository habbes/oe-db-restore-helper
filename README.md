# OE Database Restore Helper

This is a simple helper to restore scheduled db backups of OpenEvSys instances.

The instances should have DB backups uploaded through the Database Restore feature in the Admin panel.

This scripts will simply run the `run_db_restore.php` script in each of the specified OE instances.

## Usage

- Create an `instances.txt` file
- Populate the `instances.txt` with the full path of each instance that you want the database restore helper to include.
Each instance path should be on a separate line. See `instances.example.txt` file for a sample.
- Run the restore script using 
```
php run_restore.php
```

You can automate this script with a cron job.
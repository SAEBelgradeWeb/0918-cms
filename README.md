# CMS created on class

Make sure to create new  database and import `0918tasks.sql`

To create and import database, you can use 

```angular2html
mysql -u root -p
create database dbname;
exit;

mysql -u username -p database_name < 0918tasks.sql
```

Set your local database credentials in `config.php`

Once downloaded, run 
```$xslt
npm install
```

To compile resources while developing run: 
```
npm run watch
```

Alternatively you can run 
`
npm run dev
` or
`
npm run production
`
## Example

Take a look at `/about` page to see ***HelloWorld.vue*** component in place. This component also showcase usage of API and axios to fetch data. 

All components should be placed in 
`resources/assets/js/components` and registered in `resources/assets/js/app.js`

## Notes
Every time you add new class don't forget to do `composer dump-autoload`

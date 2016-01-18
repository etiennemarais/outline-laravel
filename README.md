# outline-laravel
Parse and generate API Blueprint markdown into Feature/Acceptance tests wrapper for laravel/lumen to use in your apps.

## NOTE

This project is still very opinionated about how it parses api blueprint documents and is built entirely for a single use case

### TODO
- I will continue to build this out over time to accept any format of api blueprint document and generate acceptance tests for them

### Example usage

Add the Service provider to your app. If you are using laravel, add this line in your `config/app.php`:

```
\OutlineLaravel\OutlineLaravelServiceProvider::class
```

If you are using lumen, add this line in your `bootstrap/app.php`:

```
 $app->register(\OutlineLaravel\OutlineLaravelServiceProvider::class);
```

You will be able to run the command in your command prompt. 

```
php artisan outline:regenerate
```

NOTE: This assumes that you have connected your apiary document to your github account, or have a `.apib` file in your project root. You can check out 
 [Apiary here](https://apiary.io/). It is a really good tool to quickly spec API endpoints in a standardised format.

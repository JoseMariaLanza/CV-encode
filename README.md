<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Run CV-encode base structure 🏃

Call any method within Profile or HabilidadesAdquiridas classes in artisan tinker. Here's an example:
> use App\Postulation\Profile;
>
> $profile = new Profile();
>
> $profile->addExperience();
>
> $profile->getExperience();

The previous code returns ▶️

    Illuminate\Support\Collection {#3514
     all: [
       [
         "Company" => "Tensolite",
         "Position" => "Full-Stack developer",
         "Period" => "2021 - Currently",
       ],
       [
         "Company" => "Freelance",
         "Position" => "softwareDeveloper",
         "Period" => "2016 - 2021",
       ],
       [
         "Project" => "CV-encode",
         "Year" => "2021",
         "Description" => "Technologies: Laravel",
       ],
       [
         "Project" => "CRUD Devs",
         "Year" => "2021",
         "Description" => "Technologies: Laravel, React",
       ],
       [
         "Project" => "Center Schools - Web App",
         "Year" => "2020",
         "Description" => "On development",
       ],
       [
         "Project" => "re.Viewer",
         "Year" => "2020",
         "Description" => "Technologies: HTML, CSS, JavaScript, Only mobile currently",
       ],
       [
         "Project" => "MiBar/Restto",
         "Year" => "2019",
         "Description" => "Technologies: Laravel, Bootstrap, Vue.js",
       ],
       [
         "Project" => "Sales App",
         "Year" => "2016",
         "Description" => "Technologies: C#",
       ],
     ],
   }


## License 📰

The CV-encode is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Run CV-encode base structure 🏃

Call any method within Perfil or HabilidadesAdquiridas classes in artisan tinker. Here's an example:
> use App\Postulation\Perfil;
>
> $perfil->addExperiencia();
>
> $perfil->getExperiencia();

The previous code returns ▶️

    Illuminate\Support\Collection {
     all: [
       [
         "Empresa" => "Tensolite",
         "Puesto" => "Desarrollador Full-Stack",
         "Período" => "2021 - Actualmente",
       ],
       [
         "Empresa" => "Freelance",
         "Puesto" => "Desarrollador",
         "Período" => "2016 - 2021",
       ],
       [
         "Proyecto" => "CV-encode",
         "Año" => "2021",
         "Observación" => "Tecnologías: Laravel",
       ],
       [
         "Proyecto" => "CRUD Desarrolladores",
         "Año" => "2021",
         "Observación" => "Tecnologías: Laravel, React",
       ],
       [
         "Proyecto" => "Escuelas Center - Web App",
         "Año" => "2020",
         "Observación" => "En desarrollo",
       ],
       [
         "Proyecto" => "re.Viewer",
         "Año" => "2020",
         "Observación" => "Tecnologías: HTML, CSS, JavaScript, Sólo mobile actualmente",
       ],
       [
         "Proyecto" => "MiBar/Restto",
         "Año" => "2019",
         "Observación" => "Tecnologías: Laravel, Bootstrap, Vue.js",
       ],
       [
         "Proyecto" => "Aplicación de Ventas",
         "Año" => "2016",
         "Observación" => "Tecnologías: C#",
       ],
     ],
   }


## License 📰

The CV-encode is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

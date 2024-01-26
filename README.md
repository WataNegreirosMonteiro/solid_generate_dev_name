<h1 align="center">



<br>
Solid Generate Dev Name - Study repository
</h1>

<p align="center">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/WataNegreirosMonteiro/solid_generate_dev_name.svg">
  <a href="https://github.com/WataNegreirosMonteiro">
    <img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/WataNegreirosMonteiro/solid_generate_dev_name.svg">
  </a>

  <a href="https://github.com/lukemorales/bancointer/issues">
    <img alt="Repository issues" src="https://img.shields.io/github/issues/WataNegreirosMonteiro/solid_generate_dev_name.svg">
  </a>

  <img alt="GitHub" src="https://img.shields.io/github/license/WataNegreirosMonteiro/solid_generate_dev_name.svg">
</p>

<h4>

This repository houses a project dedicated to studying and implementing the principles of the SOLID design pattern in a compact back-end application. The main functionality of the application is to add the prefix "dev_" to the name provided by the user. For example, if the name "wata" is entered, the application will return all records from the database, including the new record "dev_wata". This project serves as an educational resource for those interested in learning and applying SOLID principles in back-end development.
</h4>

<p align="center">
  <a href="#memo-license">License</a>
</p>

<div align="center">

![carbon](https://github.com/WataNegreirosMonteiro/solid_generate_dev_name/assets/90472705/2e18893c-c62d-47dc-9eb6-fb4a55b64fd9)

</div>

You can test this application's code using the ``/process-string endpoint``. To do this, make a POST request with the ``name`` key.

The application will return a JSON object that contains an array of results. Each object within this array represents a record in the database and includes the id, name, created_at, and updated_at fields. The name field will be the name provided in the request, prefixed ``with dev_``.

Example of return:
````{
    "results": [
    {
        "id": 1,
        "name": "dev_wata",
        "created_at": "2024-01-25T20:55:37.000000Z",
        "updated_at": "2024-01-25T20:55:37.000000Z"
    },
    {
        "id": 2,
        "name": "dev_wata2",
        "created_at": "2024-01-25T20:55:43.000000Z",
        "updated_at": "2024-01-25T20:55:43.000000Z"
    },
    {
        "id": 3,
        "name": "dev_wata3",
        "created_at": "2024-01-25T21:28:50.000000Z",
        "updated_at": "2024-01-25T21:28:50.000000Z"
    }
    ]
}
````


<div align="center">

[DEMO](http://solid-generate-dev-name.watanegreirosmonteiro.com.br/)
</div>

## :rocket: Technologies

This project was developed with the technologies:

- [Laravel](https://laravel.com/)
- [PhpStorm](https://www.jetbrains.com/phpstorm/promo/?source=google&medium=cpc&campaign=AMER_en_BR_PhpStorm_Branded&term=phpstorm&content=540304889981&gad=1&gclid=CjwKCAiAjfyqBhAsEiwA-UdzJFM5CDwBPAuoc9godeizCFTQSUHczNQ9v7cUZVB9PWffZz4OUr5TZxoCySwQAvD_BwE)
- [PHPUnit](https://phpunit.de/)

## :memo: License

This project is under the MIT license. See the [LICENSE](https://github.com/WataNegreirosMonteiro/solid_generate_dev_name/blob/main/LICENSE) for more information.
---

Made with ♥ by Wata Negreiros Monteiro :wave: [Get in touch!](https://www.linkedin.com/in/wata-negreiros-monteiro-2a94ab1a7/)
| [<img src="https://avatars.githubusercontent.com/u/90472705?v=4" width=115><br><sub>Wata Negreiros Monteiro</sub>](https://github.com/WataNegreirosMonteiro) |  
| :---: | 

<p align="center">
  <img src="https://raw.githubusercontent.com/PKief/vscode-material-icon-theme/ec559a9f6bfd399b82bb44393651661b08aaf7ba/icons/folder-markdown-open.svg" width="100" alt="project-logo">
</p>
<p align="center">
    <h1 align="center">DBTEST</h1>
</p>
<p align="center">
    <em>Explore manufacturers, suppliers, reports-Seamless, responsive experience. or Navigate manufacturing world, reports included-Bootstrap at its best.</em>
</p>
<p align="center">
	<img src="https://img.shields.io/github/license/KillaMeep/dbtest?style=flat-square&logo=opensourceinitiative&logoColor=white&color=0080ff" alt="license">
	<img src="https://img.shields.io/github/last-commit/KillaMeep/dbtest?style=flat-square&logo=git&logoColor=white&color=0080ff" alt="last-commit">
	<img src="https://img.shields.io/github/languages/top/KillaMeep/dbtest?style=flat-square&color=0080ff" alt="repo-top-language">
	<img src="https://img.shields.io/github/languages/count/KillaMeep/dbtest?style=flat-square&color=0080ff" alt="repo-language-count">
<p>
<p align="center">
		<em>Developed with the software and tools below.</em>
</p>
<p align="center">
	<img src="https://img.shields.io/badge/PHP-777BB4.svg?style=flat-square&logo=PHP&logoColor=white" alt="PHP">
	![MariaDB](https://img.shields.io/badge/MariaDB-003545?style=for-the-badge&logo=mariadb&logoColor=white)
</p>

<br><!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary><br>

- [ Overview](#-overview)
- [ Features](#-features)
- [ Repository Structure](#-repository-structure)
- [ Modules](#-modules)
- [ Getting Started](#-getting-started)
  - [ Installation](#-installation)
  - [ Usage](#-usage)
- [ Contributing](#-contributing)
</details>
<hr>

##  Overview

The dbtest project is an open-source PHP web application designed to provide a user-friendly interface for managing and accessing various data through dynamic pages. Key functionalities include manufacturer and supplier information display via indexed pages, seamless navigation using Bootstrap CSS, and capabilities for auto-reporting item counts via reports.php. This application aims to enhance decision-making by delivering essential data in an engaging and visually appealing manner.

---

##  Features

|   | Feature         | Description                                                |
|----|-------------------|---------------------------------------------------------------|
| ⚙️  | **Architecture** | A simple PHP project utilizing the MVC (Model-View-Controller) design pattern with Bootstrap for frontend style and navigation. |
| 🔌 | **Integrations**  | Bootstrap CSS/JavaScript for frontend styling, navbar, and responsive design. No other notable integrations or dependencies mentioned in the codebase. |
| 🧩 | **Modularity**    | Modularized with separate files for controllers, views, models, and a clear separation of concerns between frontend (HTML/CSS) and backend (PHP). |
| ⚡️  | **Performance**   | Performance depends on the content and complexity of data being processed. |
| 📦 | **Dependencies**  | Depends on 'php', and includes bootstrap. |

---

##  Repository Structure

```sh
└── dbtest/
    ├── administration.php
    ├── assets
    │   ├── bootstrap.bundle.min.js
    │   └── bootstrap.min.css
    ├── home.php
    ├── index.php
    ├── manufacturers.php
    ├── navbar.php
    ├── reports.php
    └── suppliers.php
```

---

##  Modules

<details closed><summary>.</summary>

| File                                                                                         | Summary                                                                                                                                                                                                                                                                                                                                        |
| ---                                                                                          | ---                                                                                                                                                                                                                                                                                                                                            |
| [index.php](https://github.com/KillaMeep/dbtest.git/blob/master/index.php)                   | Index.php serves as the entry point, integrating the navbar (navbar.php) into its frame using JavaScript, providing seamless navigation while adhering to a dark color scheme with Bootstrap CSS.                                                                                                                                              |
| [manufacturers.php](https://github.com/KillaMeep/dbtest.git/blob/master/manufacturers.php)   | Navigate the Manufacturers page in this PHP project by opening manufacturers.php. This file serves as the entry point for displaying manufacturers' information. It incorporates the Bootstrap CSS framework for styling and includes the navbar.php for site navigation, enhancing user experience.                                           |
| [navbar.php](https://github.com/KillaMeep/dbtest.git/blob/master/navbar.php)                 | The navbar.php file is responsible for rendering the top-level navigation menu in the repository. It uses Bootstrap to style the menu and dynamically sets the active tab based on the current PHP script being executed.                                                                                                                      |
| [suppliers.php](https://github.com/KillaMeep/dbtest.git/blob/master/suppliers.php)           | Create an engaging suppliers page within the dbtest repositorys architecture. The suppliers.php" file serves as the template, integrating the Bootstrap framework with its CSS and JavaScript assets for a visually appealing and responsive layout. Here, developers can build supplier-focused content, ensuring a seamless user experience. |
| [reports.php](https://github.com/KillaMeep/dbtest.git/blob/master/reports.php)               | The reports.php file serves as the entry point for accessing various reporting functionalities within the application. By integrating essential data and leveraging included navigation (navbar.php), users can easily explore and analyze necessary reports, enhancing informed decision-making.                                              |
| [administration.php](https://github.com/KillaMeep/dbtest.git/blob/master/administration.php) | This PHP file sets up the structure for the administration page, including importing Bootstrap styles and integrating the navigation bar. The content area remains empty for custom administrative functions.                                                                                                                                  |
| [home.php](https://github.com/KillaMeep/dbtest.git/blob/master/home.php)                     | Create an immersive home page experience by utilizing home.php. This file sets up the HTML structure, integrates Bootstrap styles, and includes the navigation bar, welcoming users with a Welcome to the Home Page heading.                                                                                                                   |

</details>

---

##  Getting Started

**System Requirements:**

* **PHP**: `any`

###  Installation

<h4>From <code>source</code></h4>

> 1. Clone the dbtest repository:
>
> ```console
> $ git clone https://github.com/KillaMeep/dbtest.git
> ```
>
> 2. Change to the project directory:
> ```console
> $ cd dbtest
> ```

###  Usage

<h4>From <code>source</code></h4>

> Run dbtest using the command below:
> ```console
> $ php -S localhost:8080
> ```

---

##  Contributing

Contributions are welcome! Here are several ways you can contribute:

- **[Report Issues](https://github.com/KillaMeep/dbtest.git/issues)**: Submit bugs found or log feature requests for the `dbtest` project.
- **[Submit Pull Requests](https://github.com/KillaMeep/dbtest.git/blob/main/CONTRIBUTING.md)**: Review open PRs, and submit your own PRs.
- **[Join the Discussions](https://github.com/KillaMeep/dbtest.git/discussions)**: Share your insights, provide feedback, or ask questions.

<details closed>
<summary>Contributing Guidelines</summary>

1. **Fork the Repository**: Start by forking the project repository to your github account.
2. **Clone Locally**: Clone the forked repository to your local machine using a git client.
   ```sh
   git clone https://github.com/KillaMeep/dbtest.git
   ```
3. **Create a New Branch**: Always work on a new branch, giving it a descriptive name.
   ```sh
   git checkout -b new-feature-x
   ```
4. **Make Your Changes**: Develop and test your changes locally.
5. **Commit Your Changes**: Commit with a clear message describing your updates.
   ```sh
   git commit -m 'Implemented new feature x.'
   ```
6. **Push to github**: Push the changes to your forked repository.
   ```sh
   git push origin new-feature-x
   ```
7. **Submit a Pull Request**: Create a PR against the original project repository. Clearly describe the changes and their motivations.
8. **Review**: Once your PR is reviewed and approved, it will be merged into the main branch. Congratulations on your contribution!
</details>

<details closed>
<summary>Contributor Graph</summary>
<br>
<p align="center">
   <a href="https://github.com{/KillaMeep/dbtest.git/}graphs/contributors">
      <img src="https://contrib.rocks/image?repo=KillaMeep/dbtest.git">
   </a>
</p>
</details>

---

##  License

This project is protected under the [SELECT-A-LICENSE](https://choosealicense.com/licenses) License. For more details, refer to the [LICENSE](https://choosealicense.com/licenses/) file.

---

##  Acknowledgments

- List any resources, contributors, inspiration, etc. here.

[**Return**](#-overview)

---

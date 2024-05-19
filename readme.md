<p align="center">
  <img src="https://camo.githubusercontent.com/67cb92170fa83b15024e74427efece7f7d01c652e92025e199073b7874cdfdcf/68747470733a2f2f63646e2d69636f6e732d706e672e666c617469636f6e2e636f6d2f3531322f363239352f363239353431372e706e67" width="100" alt="project-logo">
</p>
<p align="center">
    <h1 align="center">Item Database WebUI</h1>
</p>
<p align="center">
	<img src="https://img.shields.io/github/license/KillaMeep/dbtest" alt="license">
	<img src="https://img.shields.io/github/last-commit/KillaMeep/dbtest?style=flat-square" alt="last-commit">
	<img src="https://img.shields.io/github/languages/top/KillaMeep/dbtest" alt="repo-top-language">
	<img src="https://img.shields.io/github/languages/count/KillaMeep/dbtest" alt="repo-language-count">
	
<p>
<p align="center">
		<em>Developed with the software and tools below.</em>
</p>
<p align="center">
	<img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
	<img src="https://img.shields.io/badge/MariaDB-003545?style=for-the-badge&logo=mariadb&logoColor=white" alt="MariaDB">
	<img src="https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E" alt="JavaScript">
 	<img src="https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white" alt="HTML5">
	
</p>

<br><!-- TABLE OF CONTENTS -->
<details open>
  <summary>Table of Contents</summary><br>

- [ Overview](#overview)
- [ Features](#features)
- [ Repository Structure](#repository-structure)
- [ Modules](#modules)
- [ Getting Started](#etting-started)
  - [ Installation](#installation)
  - [ Usage](#usage)
- [ Contributing](#contributing)
</details>
<hr>

##  Overview

The dbtest project is an open-source PHP web application designed to provide a user-friendly interface for managing and accessing various data through dynamic pages. Key functionalities include manufacturer and supplier information display via indexed pages, seamless navigation using Bootstrap CSS, and capabilities for auto-reporting item counts, and much more.

---

##  Features

|   | Feature         | Description                                                |
|----|-------------------|---------------------------------------------------------------|
| ⚙️  | **Architecture** | A simple PHP project utilizing the MVC (Model-View-Controller) design pattern with Bootstrap for frontend style and navigation. |
| 🔌 | **Integrations**  | Bootstrap CSS/JavaScript for frontend styling, navbar, and responsive design. No other notable integrations or dependencies mentioned in the codebase. |
| 🧩 | **Modularity**    | Modularized with separate files for controllers, views, models, and a clear separation of concerns between frontend (HTML/CSS) and backend (PHP). |
| ⚡️  | **Performance**   | Performance depends on the content and complexity of data being processed. |
| 📦 | **Dependencies**  | Depends on php, and includes bootstrap. |

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

<details open><summary>.</summary>

| File | Summary |
| --- | --- |
| [index.php](https://github.com/KillaMeep/dbtest/blob/master/index.php)                   | Index.php serves as the entry point. |                                                                                                                                          |
| [manufacturers.php](https://github.com/KillaMeep/dbtest/blob/master/manufacturers.php)   | This file serves as the entry point for displaying manufacturers' information. It incorporates the Bootstrap CSS framework for styling and includes the navbar.php for site navigation, enhancing user experience.|
| [navbar.php](https://github.com/KillaMeep/dbtest/blob/master/navbar.php)                 | The navbar.php file is responsible for rendering the top-level navigation menu in the repository. It uses Bootstrap to style the menu and dynamically sets the active tab based on the current PHP script being executed.|
| [suppliers.php](https://github.com/KillaMeep/dbtest/blob/master/suppliers.php)           | The suppliers.php file serves as a place to find all the suppliers for the items tracked in the DB.|
| [reports.php](https://github.com/KillaMeep/dbtest/blob/master/reports.php)               | The reports.php file serves as the entry point for accessing various reporting functionalities within the application. By integrating essential data and leveraging included navigation (navbar.php), users can easily explore and analyze necessary reports, enhancing informed decision-making.|
| [administration.php](https://github.com/KillaMeep/dbtest/blob/master/administration.php) | This PHP file sets up the structure for the administration page, including importing Bootstrap styles and integrating the navigation bar. The content area remains empty for custom administrative functions.|
| [home.php](https://github.com/KillaMeep/dbtest/blob/master/home.php)                     | A simple home page.|

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

- **[Report Issues](https://github.com/KillaMeep/dbtest/issues)**: Submit bugs found or log feature requests for the `dbtest` project.
- **[Submit Pull Requests](https://github.com/KillaMeep/dbtest/pulls?q=is%3Apr+is%3Aopen+sort%3Aupdated-desc)**: Review open PRs, and submit your own PRs.

<details closed>
<summary>Contribution Guidelines</summary>

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
<summary>Contributors</summary>
<br>
<p align="center">
   <a href="https://github.com{/KillaMeep/dbtest./}graphs/contributors">
      <img src="https://contrib.rocks/image?repo=KillaMeep/dbtest">
   </a>
</p>
</details>

---

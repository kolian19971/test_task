
### Installation


1. Clone the repo
   ```sh
   git clone https://github.com/kolian19971/test_task.git
   ```

2. Update composer
    ```sh
       composer update
    ```

3. Edit **.env**
   
    3.1 Set access to database
   ```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=v1
    DB_USERNAME=root
    DB_PASSWORD=root
   ```
    3.2 Set **GOOGLE_MAP_API_KEY**  && **APP_URL**  


4. Run migrations
   ```sh
   php artisan migrate
   ```


### Dashboard

* Link: siteUrl/admin
* Login: admin@admin.ua  
* Password: 12345678


### Example

* [Test task](http://1990919.ji419582.web.hosting-test.net)

### Test Task

Development Requirements

1. General Requirements
 
    * Develop a branch search functionality at HTML5, CSS3+, JavaScript, PHP 7+ and  MySQL.
    
    * Any Libraries and JavaScript plugins can be used. 
    * Development should be easily transferred between servers with minimal manipulation of the database and code. Will be tested on an internal folder: http://exapmle.com/my_site

    * The Home and Admin pages must meet the following requirements:
        * PageSpeed Insights score 65+/70+
        * W3C Markup Validator only minor warnings are allowed.

2. Front-End Requirements
   
    * Home Page design should match Home.psd.
    * Supporting storyboard is contained in files Home-Page.png, Login-Form.png, Admin-Page.png and Search-Popup.png.
    * Admin Page design should match Admin-Page.png
    * You can apply Bootstrap framework.
    * Pages should be responsive to all dimensions (Liquid).
    * Pages should display properly across browsers.
    * Pay attention to hover, active states.
    * Pay attention to drop-down menu.

3. Back-End Requirements
    * Architecture - Basic MVC Model on PHP 7+ and MySQL.
    * No any Dashboard required.
    * Admin Page should be with authorization through the database MySQL by login/password.
    * Admin Page should contain buttons: Upload Regions and Upload Offices for uploading Regions.csv and Offices.csv at database. As well as Clear Database for its cleaning.
    * At Home Page should appear pop up thought the search by zip code that displays list of offices of the region and gmap with markers on it.

-------------
The usage of techniques and skills to extend the functionality of this test task and add additional effects are welcomed. For experienced developer there is 10-14 hours to accomplish the task. For applicants there is 3-4 calendar days  to accomplish the task from the moment of receiving it. An assessment will be conducted in accordance with Time/Quality of it performance. Once the task is concluded, email it as fully archived Project with database damp and accesses to admin page. Email address clarify at the interview.

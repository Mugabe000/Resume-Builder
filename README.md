## How to install the Project:

### Clone the project:
- in terminal run :
 ```bash
  git clone git@github.com:https-github-com-Uwasenina/Resume-Builder.git
  ```
  ### Then go into the folder of your project:
  by running in the terminal:
  ```bash
  cd Resume-Builder
  ```
### Go to the root of the project
and run: 
- ```bash
  npm install
  
  ```
- ```bash
    composer install
  
    ```
- ```bash
    cp .env.example .env
    ```
 - ```bash
      php artisan key:generate
      ```
- ```bash
      php artisan migrate
  ```

### The last step is to run the app on your local device

 - Run:
       ```bash
         npm run dev
         ```
 - Run:
        ```bash
         php artisan serve
        ```

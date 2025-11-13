# Windows Setup for PHP Projects

Use this guide after cloning the repository on a Windows machine. It covers installing PHP, configuring the PATH, and running the built-in development server.

## 1. Install PHP

1. Open <https://windows.php.net/download>.  
2. Under “Downloads”, locate the most recent **VS17 x64 Non Thread Safe** ZIP package (pick the x86 variant if your OS is 32-bit).  
3. Download the ZIP file and save it somewhere easy to access, for example `C:\Downloads\php.zip`.  
4. Create a folder `C:\php`.  
5. Right-click the ZIP file, choose **Extract All…**, and extract the contents into `C:\php`.  
   - When complete, you should have `C:\php\php.exe`, `C:\php\php.ini-development`, etc.

## 2. Configure Environment Variables

This lets you run `php` from any terminal.

1. Press `Win` and search for **Environment Variables**.  
2. Open **Edit the system environment variables**.  
3. In the **System Properties** dialog, click **Environment Variables…**.  
4. Under **System variables** (or **User variables** if you do not have admin rights), select `Path` and click **Edit…**.  
5. Click **New** and add `C:\php`.  
6. Click **OK** on every dialog to apply the change.  
7. Close any open Command Prompt or PowerShell windows. Open a new one and run:
   ```powershell



   <!-- to check php is installed -->
   php -v
   
   <!-- you can see the php version -->




If port 8000 is in use, pick another one:


<!-- to run the project  -->
php -S localhost:8080

- Open a browser to <http://localhost:8000/> to view the site.

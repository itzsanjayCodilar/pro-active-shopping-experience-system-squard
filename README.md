# pro-active-shopping-experience-system-squard

### Codilar Hackathon
#### Team Name - The System Squards


<details><summary><b>Team Members:-</b></summary>

            - Rafsal K R            - rafsal.kr@codilar.com
            - Lehan Max Dsouza      - lehanmax.d@codilar.com
            - Sachin Kumar Biswal   - sachin.b@codilar.com
            - Sanjay Kumar Das      - sanjay.d@codilar.com
            - Bhaktahari Pallai     - bhaktahari.p@codilar.com

</details>            

<details><summary><b>Setting up the code in a Magento environment:-</b></summary>
                        
            Prerequisites:
                        Make sure you have a working Magento installation set up. This includes having a web server, PHP, and a MySQL database configured and running.
                        
            Clone the Repository:
                        Open a terminal and navigate to the root directory of your Magento installation (where your Magento files are located). Clone the repository into this directory:
                        
                        
                        git clone https://github.com/itzsanjayCodilar/pro-active-shopping-experience-system-squard.git .
                        Note the trailing period (.) after the repository URL, which clones the repository into the current directory.
                        
            Install Composer Dependencies:
                        Magento often relies on third-party libraries installed via Composer. Navigate to your Magento root directory and install the required dependencies:
                        
                        composer install
            Configure Magento:
                        You'll need to configure your Magento installation to use the database, web server, and other settings. This may involve creating a app/etc/env.php file if it's not present and setting up the database connection.
                        
            Run Magento Setup:
                        bin/magento setup:upgrade
                        bin/magento setup:di:compile
                        bin/magento setup:static-content:deploy
                        bin/magento cache:flush
                        
                        Set Permissions:
                        Ensure the appropriate file permissions are set for your Magento files. This can vary depending on your server setup.

</details>   

        



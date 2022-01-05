yarn create react-app appname
yarn gitty update message 
yarn init/ init -y = package.json 
time yarn add bootstrap / bootstrap@2.3.3 = add package with yarn + time 
yarn --version/-v
yarn have offline && yarn main folder chech collect 
enter for default choose = yarn init er somoy 
yarn.lock = create after add first dependency by yarn add something
yarn.lock will update in i update or remove something auto ,
vi package.json = show what in File,
rm -R node_modules/ && rm package.json && rm yarn.lock = remove this 
yarn install = dile node_modules create hoye jabe er bitor er ja package.json and yarn.lock e ache,
yarn add jquery angular  = add multiple,
yarn ls = see dependency list of your project 
yarn add jquery@1.0 = with version install,
yarn install = eita tar bitor ja dependency ase ta install kore dibe package.json e 
yarn outdated = checkout outdated version 
yarn outdated loadash = checkout particular dependency 
yarn upgrade bootstrap@5.0 = update 
yarn --help/help  = list of yarn cmd 
yarn start = run project
yarn global add package = must in this order  
yarn global bin = global location find C:\Users\Asus\AppData\Local\Yarn\bin 
yarn global remove nodemodel = remove from global 
yarn list = see dependency all in node_modules ; 
yarn list --dept=0 = top level dependency see 
yarn list --pattern gulp = see only gulp dependency all child + parent 
yarn add gulp -D = development environment
yarn check = yarn.lock and package.json match with package File,
yarn import = if bychance delete yarn.lock then this will with package.json all dependency
yarn config set init-license ISC = license changel after doing it you have to recreate package.json 
yarn config get init-license = see license 
yarn config delete init-license  = delete license after delete mit will back 
"scripts":{
    "dev":"nodemon index.js"
} == yarn run dev = this will run index.js in console 
yarn license list = all license
yarn pack = pack all in zip 
yarn chech list  = list of chech
yarn chech list --patter loadash  = list of chech
yarn ceche clean


npm ==========================
npm start
npx create-react-app my-app --use-npm / --use-yarn 
npx create-react-app app-name = npx will choose
npm uninstall yarn / yarn --global = yarn uninstall,
npm install yarn /--global yarn  = yarn install,
npm init = package.json and package.lock create,
time npm install bootstrap / bootstrap@2.3.3 = add package with npm + time 
npm uninstall bootstrap / bootstrap@2.3.3 = remove package with npm + time 

global = full pc te ase , local mane only ek project e ase ,

react app already kichu dependency diye dey yarn er dara 


Brad Traversy NPM Crash course 
-------------------------
# GET VERSION
npm -v (or --version)

# GET HELP
npm help
npm

# CREATE PACKAGE.JSON
npm init
npm init -y (or --yes)

# SET DEFAULTS
npm config set init-author-name "YOUR NAME"
npm set init-license "MIT"

# GET DEFAULTS
npm config get init-author-name
npm get init-license

# REMOVE DEFAULTS
npm config delete init-author-name
npm delete init-license

# INSTALLING LOCAL PACKAGES
npm install lodash --save (or npm install --save lodash)
npm install moment --save
npm install gulp gulp-sass --save-dev

# MOVE TO ANOTHER FOLDER
npm install
npm install --production

# REMOVING MODULES
npm uninstall gulp-sass --save-dev
npm remove gulp --save-dev

#INSTALL CERTAIN VERSIONS
npm install lodash@4.17.3 --save

# UPDATE
npm update lodash --save

# INSTALL GLOBAL MODULE
npm install -g nodemon
npm install -g live-server

# RUN NODEMON
nodemon

# FIND ROOT FOLDER
npm root -g

# REMOVE GLOBAL PACKAGES
npm remove -g nodemon

# LISTING PACKAGES
npm list
npm list --depth 0
npm list --depth 1

# INSTALL LIVE-SERVER LOCALLY
npm install live-server --save-dev

# NPM SCRIPT
"scripts": {
    "start": "node index.js",
    "dev": "live-server"
  },


Traversy Media - Yarn Crash Course : 
----------------------------------------
# GET VERSION
yarn -v (or --version)

# GET HELP
yarn help

# CREATE PACKAGE.JSON
yarn init
yarn init -y // Use defaults

# SET DEFAULTS
yarn config set init-license ISC

# GET DEFAULTS
yarn config get init-license

# REMOVE DEFAULTS
yarn delete init-license

# INSTALLING LOCAL PACKAGES
yarn add lodash
yarn add moment

# INSTALL FROM PACKAGE.JSON
(add "gulp":"*")
yarn install

# REMOVING MODULES
yarn remove lodash

# INSTALL CERTAIN VERSIONS
yarn add lodash@4.17.3

# FIND OUTDATED VERSIONS
yarn outdated lodash
yarn outdated

# UPGRADE
yarn upgrade lodash
yarn upgrade

# INSTALL GLOBAL MODULE (global must be put right after yarn)
yarn global add nodemon

# FIND ROOT FOLDER
yarn global bin

# REMOVE GLOBAL PACKAGES
yarn global remove nodemon

# LISTING PACKAGES
yarn list
yarn list --depth=0
yarn list --depth=1
yarn list --pattern gulp

# INSTALLING AS DEV DEPENDENCY
yarn add gulp -D or --dev

# REMOVE DEV DEPENDENCY
yarn remove gulp

#VERIFY THAT VERSIONS MATCH LOCK FILE
yarn check

# CREATE YARN.LOCK FILE
yarn import

# ADD SCRIPT
"scripts": {
    "dev": "nodemon index.js"
  },


# RUN SCRIPT
yarn run dev

# GET LICENSES
yarn license

# CREATE GZIP ARCHIVE OF DEPENDENCIES
yarn pack
yarn pack mydep

# LIST GLOBAL CACHE PACKAGES
yarn cache list
yarn cache list --pattern lodash

// blog link : https://medium.com/@tmtushar28/introduction-to-yarn-javascript-package-manager-by-facebook-d8d886c80deb#.wjposdqoj
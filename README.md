<br/><br/>

<p align="center"><a href="https://innovategy.com" target="_blank"><img src="https://raw.githubusercontent.com/innovategy/common/main/brand-material/logo-positive.svg" width="400"></a></p>

<br/><br/>

## About Ideation Tool

Ideation Tool helps with the collection, enrichment, rating, and prioritization of ideas. We believe having access to simple to use tools can enable established businesses, startups, and accelerators worldwide to ideate and innovate better. Innotavety Ideation Tool has the following key features:

- Idea collection wizard with realtime AI powered assistance
- Similarity finder with background patent and web search 
- Multiple visibility setting with public and private modes 
- Multi-dimension evaluation criteria setting 
- Timestamping and certificate generation on public blockchain
- Opinion gathering form and short links
- Quadratic voting 
- Team management

## Sponsors

We would like to extend our thanks to the following sponsors for funding Ideation Tool development. If you are interested in becoming a sponsor, please visit the Innovategy's [Patreon page](https://patreon.com/innovategy).

### Key Sponsors

- **[Innovategy Oy](https://innovategy.fi/)**
- **[Start Hub](https://starthub.fi/)**

### News

 - Innovategy's Ideation Tool has received $6,500 from the AWS Activate 

## Local development environment setup 

To setup a local development environment, you would need [Docker Desktop](https://www.docker.com/products/docker-desktop/) and [Git](https://git-scm.com/) installed on your local machine.

### Step 1 
Clone this repository on your local machine using the following command. 

~~~bash
git clone git@github.com:innovategy/ideation-app.git
~~~

### Step 2
Goto ideation-app folder 

~~~bash
cd ideation-app
~~~

### Step 3
Install all dependencies using the following helper image from docker. 

~~~bash
docker run --rm \
    -u "$(id -u):$(id -g)" \    
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install
~~~

### Step 4
Create an alias for [Laravel Sail](https://laravel.com/docs/9.x/sail) 

~~~bash
alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'
~~~

### Step 5
Fire up the complete stack using following sail command 

~~~bash
sail up 
~~~

You should now be able to use the ideation app on http://localhost and have database access to Postgresql on port 5432

## Data Model
Following is the link to data model diagram of ideation app: 
[Data Model](https://drawsql.app/innovategy-oy/diagrams/ideation-app)

## Contributing

Thank you for considering contributing to the Ideation Tool! You can reach out to [hi@innovategy.com](mailto:hi@innovategy.com)

## Security Vulnerabilities

If you discover a security vulnerability within Ideation Tool, please send an e-mail to [security@innovategy.com](mailto:security@innovategy.com). All security vulnerabilities will be promptly addressed.

## License

The Ideation Tool is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

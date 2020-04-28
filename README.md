# Php + MySQL(RDS) for AWS Elastic Beanstalk

With AWS Elastic Beanstalk : Single Container Docker environments

![docker_platform.png](docker_platform.png)

## Local Test Commands

Build Docker

    docker build -t my-php-mysql .
    
Start a new Docker container
    
    docker run -d --name my-app -p 8000:80 my-php-mysql

After build, create a new container 
    
    docker stop my-app && docker rm $_ && docker run -d --name $_ -p 8000:80 my-php-mysql
    
Access [http://localhost:8000/](http://localhost:8000/)

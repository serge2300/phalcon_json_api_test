# Test JSON API (Phalcon)

## Requirements

- PHP 5.x
- [Phalcon Framework](http://www.phalconphp.com)

## Installation

- clone this repository
- edit app/config/config.php file and enter your database credentials
- navigate to project root and run `sh build.sh` in a console. This will install composer dependencies and perform database migrations
- set up your local server to point to **project root/public**

## API

### Get all robots

1. Url: http://example.com/api/robots
2. Method: GET

Example:
curl -i -X GET http://example.com/api/robots

### Search for a robot
1. Url: http://example.com/api/robots/search/:name
2. Method: GET
3. Data: {name: "Robot name"}

Example:
curl -i -X GET http://example.com/api/robots/search/Astro

### Get one robot by ID
1. Url: http://example.com/api/robots/:id
2. Method: GET
3. Data: {id: "Robot ID"}

Example:
curl -i -X GET http://example.com/api/robots/3

### Create a new robot
1. Url: http://example.com/api/robots
2. Method: POST
3. Data: {"name":"Robot name","type":"Robot type","year":year}

Example:
curl -i -X POST -d '{"name":"C-3PO","type":"droid","year":1977}' http://example.com/api/robots

### Update a robot
1. Url: http://example.com/api/robots
2. Method: PUT
3. Data: {"id": "Robot ID","name":"Robot name","type":"Robot type","year":year}

Example:
curl -i -X PUT -d '{"id": 1, "name":"ASIMO","type":"humanoid","year":2000}' http://example.com/api/robots/4

### Delete a robot
1. Url: http://example.com/api/robots/:id
2. Method: DELETE
3. Data: {id: "Robot ID"}

Example:
curl -i -X DELETE http://example.com/api/robots/4
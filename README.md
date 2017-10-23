[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/CoworkingMap/functions?utm_source=RapidAPIGitHub_CoworkingMapFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# CoworkingMap Package
Web app where you can find and filtering coworking in all world.
* Domain: [coworkingmap.org](https://coworkingmap.org/)
* Credentials: password, username

## How to get credentials: 
0. Register on [coworkingmap.org](https://coworkingmap.org/)

## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ``` 
 
## CoworkingMap.getAccessToken
Coworkingmap.org ’s API uses JSON Web Token (JWT) for authentication. If you want to learn more about this, visit jwt.io. All requests will be authenticated by a token which expires within one week. 

| Field   | Type       | Description
|---------|------------|----------
| password| credentials| Your account password from coworkingmap.org.
| username| credentials| Your account username from coworkingmap.org.

## CoworkingMap.checkTokenDateExpiration
To check the expiration date of your token.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Your accessToken from getAccessToken endpoint.

## CoworkingMap.getCoworkingsByCountry
Filtering by country.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Your accessToken from getAccessToken endpoint.
| country    | String| Country for search coworkings.

## CoworkingMap.getCoworkingsByCity
Filtering by city.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Your accessToken from getAccessToken endpoint.
| country    | String| Country for search coworkings.
| city       | String| City for search coworkings.

## CoworkingMap.getCoworkingsByName
Filtering by space name.

| Field      | Type  | Description
|------------|-------|----------
| accessToken| String| Your accessToken from getAccessToken endpoint.
| country    | String| Country for search coworkings.
| city       | String| City for search coworkings.
| spaceName  | String| Space name for search coworking.


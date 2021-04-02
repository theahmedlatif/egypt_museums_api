# egypt_museums_api
This API provides list of museums in Egypt.

_**Created using php 8.03**_

### Output Components
this API provides output in json format as following:
1. count of rows
2. body of output: array of museums showing [id, museum, arabic_name, city, type, establishment year, website, location coordinates, wikipedia url]

### output sample:
```json
{
    "itemCount": 1,
    "body": [
        {
            "id": "1",
            "mname": "Abdeen Palace Museum",
            "arabic_name": "قصر عابدين",
            "city": "Cairo",
            "type": "political",
            "est_year": "1863",
            "website": "",
            "coordinates": "30.041667, 31.248333",
            "wikipedia_url": "https://en.wikipedia.org/wiki/Abdeen_Palace"
        }
    ]
}

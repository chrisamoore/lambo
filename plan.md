#Jagged/Lambo ( CLI tool for badasses ) Phase 1 : Ideal Usage
**jagged/lambo**

`lambo config:validate --c=/path/to/conf.json` 

__`Word, config is good to go.`__

`lambo soa:build --c=/path/to/conf.json` 

__`Aight, let's do this...`__
 
---
 
**/path/to/conf.json**

    {
        "resources": [
            {
                "resource_name": {
                    "key": "value",
                    "id": "integer",
                    "name": "string",
                    "email": "string[30]:unique",
                    "content": "text",
                    "sub_content": "textlable",
                    "company": "string[100]:default('Some Company')",
                    "date_created": "date"
                }
            },
            {
                "resource_two": {
                    "key": "value",
                    "id": "integer",
                    "name": "string",
                    "email": "string[55]:unique",
                    "content": "text",
                    "sub_content": "text:nullable",
                    "data": "string[100]:default('Some Data'):nullable",
                    "date_created": "timestamp"
                }
            }
        ],
        "_meta": {
            "tests": {
                "unit": {
                    "phpunit": "true",
                    "js": "jasmine",
                    "code_coverage": "true"
                },
                "behavioral": {
                    "behat": "true"
                }
            },
            "frameworks": {
                "frontend": "angular",
                "backend": "laravel"
            },
            "frontend":{
                "nav-items" : [
                    "resource_name": "create",
                    "resource_name": "edit"
                ],
                "contextual" : [
                    "resource_two": "create",
                    "resource_two": "edit"
                ],
                "logo": "path/to/logo",
                "tagline": "Yea We can configure that",
                "angular" : {
                    "directive",
                    "module",
                    "idk"
                }
            }
            
        }
    }

---
`lambo config:validate --c=/path/to/conf.yml` 

__`Word, config is good to go.`__

`lambo soa:build --c=/path/to/conf.yml` 

__`Aight, let's do this...`__
 
---
    lambo:
        resources:
            resource_name: 
                key: value
                id: integer
                name: string
                email: [ string: 30, unique ]
                content: text
                sub_content: [ text, nullable ]
                company: [ string: 100, default: 'Some Company']
                date_created: date
            resource_two: 
                key: value
                id: integer
                name: string
                email: [ string: 55, unique ]
                content: text
                sub_content: [ text, nullable ]
                data: [string: 100, default: 'Some Data', nullable ]
                date_created: timestamp
        _meta: 
            tests: 
                unit: 
                    phpunit: true
                    js: jasmine
                    code_coverage: true
                behavioral: 
                    behat: true
            frameworks: 
                frontend: angular
                backend: symfony
                yada: yada


---

`lambo config:build --c=/path/to/conf.json` 

__`Awe Damn, Lemme see.`__

    {
        "build" : "true",
        "models" : "path/to/models",
        "controllers" : "path/to/controllers",
        "_meta": {
            "tests": {
                "unit": {
                    "phpunit": "path/to/tests",
                    "js": "path/to/jasmine"
                },
                "behavioral": {
                    "behat": "path/to/feature/contexts"
                }
            },
            "frameworks": {
                "frontend": "angular",
                "backend": "laravel"
            }
        }
    }

##Creates:

    Routes: 
        Rest API:
    
    Controllers:
        CRUD
        
    Models: 
        Migrations: 
        Seeds:
    
    Views:
        Scaffolds:
        Headers: 
        Footers: 
        CSS:
        JS:
    Tests:
        JSUnitTests:
        UnitTests: 
        BehavioralTests:
        
    AngularApp:
        Ajax Calls:
        Modules:
        Directives: 
        Injections:
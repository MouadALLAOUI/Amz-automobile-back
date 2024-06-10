# Class diagram

:::mermaid
classDiagram
    class User {
        +int id
        +string name
        +string email
        +string password
        +timestamps
        +timestamp email_verified_at
        +string status
        +int role_id
        +Role get_role()
    }

    class Role {
        +int id
        +string name
        +string description
        +string type
        +timestamps
    }

    class Client {
        +int id
        +string name
        +string email
        +string telephone
        +timestamps
    }

    class Vehicule {
        +int id
        +string num_matricule
        +string marque
        +int client_id
        +int kilometrage
        +int model_id
        +int makes_id
        +timestamps
    }

    class Task {
        +int id
        +string title
        +text description
        +int client_id
        +int vehicule_id
        +string status
        +int assigned_to
        +int created_by
        +timestamps
    }

    class TaskSheet {
        +int id
        +int task_id
        +text details
        +timestamp entry
        +timestamp sortie
        +timestamps
    }

    class Operation {
        +int id
        +string name
        +text description
        +int task_sheet_id
        +timestamps
        +string tps
        +text operations_realisees
        +text observations
    }

    class AutoPart {
        +int id
        +string name
        +string part_number
        +text description
        +float price
        +int stock_quantity
        +timestamps
    }

    class Employer {
        +int id
        +string name
        +float rating
        +int user_id
        +timestamps
    }

    class CarMake {
        +int id
        +string name
        +timestamps
    }

    class CarModel {
        +int id
        +string name
        +int car_make_id
        +string series
        +timestamps
    }

    User "1" -- "many" Role : has
    Client "1" -- "many" Vehicule : owns
    Vehicule "1" -- "many" Task : is_assigned_to
    Client "1" -- "many" Task : requests
    Task "1" -- "many" TaskSheet : contains
    TaskSheet "1" -- "many" Operation : includes
    Operation "many" -- "many" AutoPart : uses
    Employer "1" -- "many" Task : performs
    CarMake "1" -- "many" CarModel : includes
    Vehicule "1" -- "1" CarMake : belongs_to
    Vehicule "1" -- "1" CarModel : belongs_to
    User "1" -- "many" Employer : employs
    Client "1" -- "many" Task : requests
    Client "1" -- "many" Vehicule : owns
:::

# Time line

::: mermaid
timeline
    title Backend Development Timeline
    2024-06-08: Design database schema
    2024-06-08: Create migrations for User, Role, Client, Vehicule, Task, TaskSheet
    2024-06-09: Create migrations for Operation, AutoPart, Employer, CarMake, CarModel
    2024-06-09: Run migrations
    2024-06-10: Create models for User, Role, Client, Vehicule
    2024-06-10: Define relationships
    2024-06-11: Create models for Task, TaskSheet, Operation, AutoPart, Employer, CarMake, CarModel
    2024-06-11: Define relationships
    2024-06-12: Set up controllers and routes for User, Role, Client
    2024-06-13: Set up controllers and routes for Vehicule, Task, TaskSheet
    2024-06-14: Set up controllers and routes for Operation, AutoPart, Employer, CarMake, CarModel
    2024-06-15: Implement business logic in services
    2024-06-15: Create service classes
    2024-06-16: Write unit tests
    2024-06-16: Debug and fix issues
    2024-06-17: Integrate backend with frontend
    2024-06-17: Perform end-to-end testing
    2024-06-17: Finalize and deploy application
:::

# Gantt

::: mermaid
gantt
    title Backend Development Gantt Chart
    dateFormat  YYYY-MM-DD
    section Database Schema and Migrations
    Design database schema          :des1, 2024-06-08, 1d
    Create migrations for User, Role, Client, Vehicule, Task, TaskSheet: mig1, after des1, 1d
    Create migrations for Operation, AutoPart, Employer, CarMake, CarModel: mig2, after mig1, 1d
    Run migrations                  :runmig, after mig2, 1d
    section Models and Relationships
    Create models for User, Role, Client, Vehicule: mod1, 2024-06-10, 1d
    Define relationships            :rel1, after mod1, 1d
    Create models for Task, TaskSheet, Operation, AutoPart, Employer, CarMake, CarModel: mod2, after rel1, 1d
    Define relationships            :rel2, after mod2, 1d
    section Controllers and Routes
    Set up controllers and routes for User, Role, Client: cont1, 2024-06-12, 1d
    Set up controllers and routes for Vehicule, Task, TaskSheet: cont2, after cont1, 1d
    Set up controllers and routes for Operation, AutoPart, Employer, CarMake, CarModel: cont3, after cont2, 1d
    section Business Logic and Services
    Implement business logic in services: biz1, 2024-06-15, 1d
    Create service classes           :serv1, after biz1, 1d
    section Testing and Debugging
    Write unit tests                :test1, 2024-06-16, 1d
    Debug and fix issues            :debug1, after test1, 1d
    section Integration and Final Touches
    Integrate backend with frontend :integ1, 2024-06-17, 1d
    Perform end-to-end testing      :test2, after integ1, 1d
    Finalize and deploy application :deploy1, after test2, 1d
:::

#

#

#

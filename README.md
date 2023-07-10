# API-CAR-WITH-SLIM-AND-ELOQUENT

The goal of this exercise is to learn how work with php slim using Eloquent ORM.

You can see in the index file how the slim app was created and matching with the ORM.

For my API I have many route like:

* /
    - method: get
    - list all categorie in my app
* /categorie
    - method: post
    - create a new categorie
    - body:  nom => name_categorie

# Honestly

The phrails-bin project is just getting the job of creating a new phrails project.  In all honesty it is a bunch of crappy code.  This needs a great deal of refactoring to get into a nice piece of code.  Until then it is what it is.

# INSTALL

Clone and add the cloned directory to your path.

# HOW TO USE

Clone this to create phrails projects.

To create a new project with the framework included run:

    ./phrails <project_name> true

To create a new project with an existing phrails framework:

    ./phrails <project_name>

<project_name> can be the name, if you want it to be created in the directory you are currently in.

<project_name can also be a full path to where you want it to be installed.

# What Next :(

1. Set your namespace.  Open:

    <project_name>/config/environments.php

On line 2 fill out your namespace name for the application.  Standard is to camel case. For example:

    define('PR_APPLICATION_NAMESPACE', 'Net\Mediaslave\ToDo');

2. Copy namespace name to ApplicationController.  Open:

    <project_name>/app/controllers/ApplicationController.php

On line 5 it should look like:

    namespace \App\Controllers;

In our example above we will now change this line to look like:

    namespace Net\Mediaslave\ToDo\App\Controllers;

# The Future

I really do not like to do the "What Next" step, but time has not allowed me to do this properly.

In the future you will be able to do:

    ./phrails <project_name:string> <namespace:string> <framework:boolean>

Until then "What Next" is needed.  :(

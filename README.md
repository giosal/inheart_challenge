# inheart_challenge
inHEART technical challenge

--------------------------------------------------
<h2>Practical challenge</h2>
<h3>The goal:</h3>
Create a webpage that contains the list of patients and allows to add/edit patient

<h3>Solution:</h3>
The solution is based on pure HTML 5 with some Bootstrap, jQuery, jQuery UI and PHP.<br/>
Demo is available at https://giosal.ge/inheart <br/><br/>
When page loads, jQuery function sends a GET request to ```list_patients.php``` file, which, in turn, reads ```data/data.txt``` JSON file that contains patient data.<br/><br/>
When user clicks ```Add patient``` button, this calls a jQuery function that opens a jQuery UI dialog. Here, user needs to input Full name and Date of birth of patient. Age is calculated using MomentJS library by withdrawing date of birth from current date and returning number of years.<br/><br/>
When user clicks ```Submit```, the form gets validated, and this calls a jQuery PUT request to ```add_patient.php``` file, which, in turn, stores the data into ```data/data.txt``` JSON file.<br/><br/>
When user clicks on the name of patient in the list, this works in a similar way to ```Add patient```, with a difference that the form is pre-filled with existing data, and additionally, ID of patient is sent to ```edit_patient.php``` file with the rest of data in order to edit specific patient.<br/>


<h3>Comments: </h3>
1. The solution requires a server with PHP handling enabled (Apache, nGinx, etc.) and correct file permissions
2. The solution can easily be deployed on a local server
3. Simpler option for patient list is available, i.e. storing them in local array. I went with intermediary solution that has a persistent storage in the form of JSON file in data directory to allow further modification to support storing data in any database (MySQL, Oracle, PostgreSQL etc.)
4. The application can be further extended to support patient photos (in this case avatar will display the photo) and change the avatar color based on patient gender (in this case gender also needs to be stored in the file/database)
5. The application can be further extended to calculate the patient age regularly and automatically update it. Otherwise, this patient property doesn't serve its purpose.

<h2>Questionnaire</h2>
1. Unit testing is a software testing method, which puts individual units/section of code under tests to determine if they are ready to be used. For example, this may allow to check if the function accepts all possible values of a parameter and is able to produce a result based on these values.
2. One of the most popular project management methodologies is Agile, which also has different flavord (SCRUM, Scrumbian etc.)
    1. Agile <br/>
       Agile manifesto outlines four values:
       - Individuals and interactions over processes and tools
       - Working software over comprehensive documentation
       - Customer collaboration over contract negotiation
       - Responding to change over following a plan <br/>
   Agile methodology proposes incremental and iterative approach to software design, the process is broken into individual models, it is unstructured compared to waterfall model, small projects can be implemented quickly, but it's hard to give an estimate on larger projects, customers can look at the project early on and provide more specific feedback.
   2. Waterfall model
    Waterfall model is very structured and sequential. The steps are the following:
       1. Requirement gathering and analysis
       2. System design
       3. Implementation
       4. Integration and testing
       5. Deployment of system
       6. Maintenance
   
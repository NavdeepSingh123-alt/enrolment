# SE
student Enrollment
after download  remove st folder. 
After download place th foder in XAMPP/htdocs/folder

------create table for user and inser data in database------. 

USE se; CREATE TABLE users ( id INT AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50) NOT NULL, password VARCHAR(255) NOT NULL, role VARCHAR(50), firstname VARCHAR(255), lastname VARCHAR(255), email VARCHAR(255), contactnumber VARCHAR(20), address TEXT );



INSERT INTO users (username, password, role, firstname, lastname, email, contactnumber, address) VALUES ('teja', 'teja123', 'user', 'Teja', 'Chunchu', 'teja.chunchu577@gmail.com', '225066554', '3 Papawai Place, Milson, Palmerston North'), ('admin', 'admin123', 'admin', 'Admin', 'User', 'admin@example.com', '1234567890', '1 Admin Street, Admin City');

------create table for courses and insert data in database------. 

CREATE TABLE courses (
    courseid INT AUTO_INCREMENT PRIMARY KEY, -- Primary key for the course table
    userid INT NOT NULL,                    -- Foreign key to reference the user
    subjectid VARCHAR(50),                -- Subject ID
    subjectname VARCHAR(255) NOT NULL,     -- Name of the subject
    prerequisite VARCHAR(255),             -- Prerequisite for the course
    year INT,                              -- Academic year
    sem INT,                               -- Semester
    coursetype VARCHAR(50),                -- Type of course (e.g., elective, core)
    enrollmentStatus VARCHAR(50),          -- Status of enrollment (e.g., open, closed)
    creditHour INT,                        -- Number of credit hours
    description TEXT,                      -- Description of the course
    FOREIGN KEY (userid) REFERENCES users(id) -- Foreign key to the users table
    
);

INSERT INTO courses (userid, subjectid, subjectname, prerequisite, year, sem, coursetype, enrollmentStatus, creditHour, description) VALUES
(1, 'D101', 'Programming Fundamentals', NULL, 1, 2, 'Elective', 'Enrolled', 120, 'To provide an introduction to the fundamentals of programming and to enable students to develop quality software. Learning Outcomes: Develop an application using an industry standard language. Debug, test, and document a software application. Demonstrate understanding of the fundamentals of software development.'),
(2, 'D111', 'Database Fundamentals', NULL, 2, 1, 'Elective', 'Enrolled', 105, 'To provide students with a broad operational knowledge of database design and administration. Learning Outcomes: Design a relational database to meet organisational requirements. Apply interaction design concepts to a user interface. Store and retrieve organisational data using query and reporting tools. Demonstrate knowledge of database design and administration.'),
(1, 'I101', 'Information System Fundamentals', NULL, 1, 2, 'Elective', 'Available', 90, 'To introduce students to business information systems and essential components of the ICT profession. Learning Outcomes: Describe information systems principles, roles and functional business areas. Communicate effectively and professionally using industry standard tools. Apply and explain professional, legal, and ethical principles relevant to the ICT industry.'),
(1, 'I102', 'Technical Support Fundamentals', NULL, 2, 1, 'Elective', 'Available', 105, 'To enable students to deliver organisational technical support based on best practice in IT Service Management. Learning Outcomes: Apply a user needs analysis to identify organisational requirements. Create, deliver, and evaluate a training session. Develop technical documentation to a professional standard. Demonstrate knowledge of best practice IT service management.'),
(1, 'I111', 'Web Fundamentals', NULL, 1, 2, 'Major', 'Enrolled', 105, 'To provide an introduction to the fundamentals of web development and to enable students to produce quality websites. Learning Outcomes: Design a website according to UX design principles that meets organizational requirements. Develop a website using an industry standard approach. Demonstrate understanding of the fundamentals of website development.'),
(2, 'I121', 'Systems Analysis Fundamentals', NULL, 2, 2, 'Major', 'Enrolled', 90, 'To provide an introduction to the principles of systems analysis and systems requirements elicitation techniques. Learning Outcomes: Analyse situations requiring problem solving. Elicit and model user requirements using a variety of techniques. Construct accurate systems analysis documentation reflecting requirements.'),
(1, 'T101', 'Network Fundamentals', NULL, 2, 1, 'Major', 'Enrolled', 95, 'To provide an introduction to the fundamentals of computer networks as they currently exist in industry and to enable students to configure, test and troubleshoot local area networks. (Cisco ITN). Learning Outcomes: Describe the operation of current network technologies. Select the most appropriate network technologies for a given scenario. Apply testing and troubleshooting techniques to networking problems.'),
(1, 'T111', 'Computer Hardware Fundamentals', NULL, 2, 1, 'Elective', 'Enrolled', 105, 'To equip students with an understanding of the fundamental of computer hardware, operating systems and troubleshooting techniques. Learning Outcomes: Describe the purpose and operation of major computer components and operating systems. Demonstrate use of a command line interface (CLI). Demonstrate ability to select, install, troubleshoot and configure IT hardware and systems software.'),
(2, 'I213', 'Dynamic Web Solutions', 'I111', 1, 2, 'Major', 'Enrolled', 105, 'To create a dynamic web application utilising a variety of open-source technologies. Learning Outcomes: Design and document a web application. Secure critical business data within the web application. Interface with a web based database management system. Implement user security and session management.'),
(2, 'I221', 'Analysis and Design', 'I121', 2, 2, 'Major', 'Enrolled', 105, 'To analyse the requirements for an information system and evaluate different methodologies used in systems analysis. Learning Outcomes: Create analysis documentation for a moderately complex system. Create design documentation for the system under investigation. Implement quality processes to ensure accuracy of analysis and design documentation.'),
(2, 'I212', 'Enterprise Data Management', 'I111 & I101', 1, 2, 'Elective', 'Available', 105, 'To enable students to design and implement enterprise data management systems. Learning Outcomes: Compare and select appropriate enterprise data management systems. Design an enterprise data management system structure. Implement an enterprise data management system including automated processes.'),
(2, 'I202', 'IT Project Management', 'I102', 2, 1, 'Major', 'Enrolled', 95, 'To learn the basic principles and terminology of the profession of project management, and apply this to create project plans. Students will also be given a brief introduction to using project management software. Learning Outcomes: Examine, discuss and apply the knowledge areas of project management. Develop a project plan for an IT related project. Use project management software to create a Gantt chart for scheduled activities and assigned resources, including people, equipment and their relevant costs. Use project management software to analyse project data and produce reports.'),
(2, 'I203', 'Digital Multimedia', 'I101', 2, 1, 'Major', 'Enrolled', 95, 'To apply principles and techniques relating to the application of digital multimedia technologies. Learning Outcomes: Describe the concepts of digital images, video and audio. Create and manipulate digital image, video and audio files according to a technical specification for distribution across the ICT infrastructure. Optimise digital multimedia for commonly used ICT mediums.'),
(1, 'I209', 'Industry Placement', '120 credits at L5', 2, 1, 'Major', 'Enrolled', 95, 'To enable students to undertake an ICT industry based work placement. The industry placement course is subject to availability and approval from the Academic Portfolio Manager. Learning Outcomes: Work within an ICT industry based environment. Meet work placement expectations and requirements. Record and evaluate work and progress. Present placement outcomes to academic supervisors.'),
(1, 'D211', 'Database Development', 'D111', 2, 1, 'Major', 'Enrolled', 95, 'To effectively design an information system for a complex business application. Learning Outcomes: Evaluate alternative design solutions. Design a complex information system. Create a prototype from a design. Formulate quality processes.'),
(1, 'D202', 'Software Process', 'D101', 1, 2, 'Elective', 'Available', 105, 'To create quality software applications utilising a modern development approach. Learning Outcomes: Undertake a team based iterative development project. Effectively manage an individual development task. Implement processes to ensure quality. Compare and select an appropriate development method for a given problem.'),
(1, 'D201', 'Advanced Programming', 'D101', 2, 2, 'Elective', 'Available', 105, 'To introduce standard algorithms required for business application programming. Learning Outcomes: Design and Construct small applications using a variety of algorithms. Devise test plans to ensure quality software. Create system maintenance documentation.'),
(1, 'T201', 'Network Services', 'T101', 1, 2, 'Elective', 'Not Available', 105, 'To implement key network services as used in modern LANs and to explain the network protocols that these services use. Learning Outcomes: Analyse and evaluate network services. Implement and configure network services. Analyse and diagnose faults within network services.'),
(1, 'T205', 'Networks (Cisco ITN)', NULL, 2, 1, 'Elective', 'Available', 105, 'To enable students to gain practical and technical networking knowledge that will assist in designing, building and analysing networks and their protocols. Learning Outcomes: Describe the devices and services used to support communications in data networks and the internet. Describe the role of protocol layers in data networks. Describe the importance of addressing and naming schemes at various layers of data networks in IPv4 and IPv6 environments. Design, calculate, and apply subnet masks and addresses to fulfil given requirements in IPv4 and IPv6 networks. Explain fundamental Ethernet concepts such as media, services, and operations. Build a simple Ethernet network using routers and switches. Use CISCO command-line interface (CLI) commands to perform basic router and switch configurations. Utilise common network utilities to verify small network operations and analyse data traffic.'),
(1, 'T206', 'Networks (CISCO SWRE)', 'T101', 1, 2, 'Elective', 'Available', 105, 'To enable students to gain practical and technical networking knowledge that will allow them to configure and troubleshoot routers, switches and resolve common issues with networks. Learning Outcomes: Describe basic switching concepts and the operation of CISCO switches. Describe the purpose, nature, and operations of a router, routing tables, and the route lookup process. Describe how VLANs create logically separate networks and how routing occurs between them. Configure and troubleshoot static routing.')

CREATE TABLE majors
major_name varchar(255),
subject_id varchar(50),
subject_name varchar(255),
year int,
sem int

INSERT into majors(major_name, subject_id, subject_name, year, sem)
VALUES('Software Engineering (Plus 5 Year 2 Electives)', 'D201', 'Advanced Programming', '2', '1'),
 ('Software Engineering', 'D202', 'Software Process', '2', '2'),
 ('Software Engineering', 'D211', 'Database Development', '2', '1'),
 ('Software Engineering (Plus 1 Year 3 Elective)', 'D211', 'Software Engineering', '3', '1'),
 ('Software Engineering', 'D303', 'Mobile Application Development', '3', '2'),
 ('Software Engineering', 'I302', 'Industry Project', '3', '2'),
 ('Software Engineering', 'I301', 'Professional Practice', '3', '1'),
 ('Data Management & Analytics (Plus 5 Year 2 Electives)', 'D211', 'Database Development', '2', '1'),
 ('Data Management & Analytics', 'D201', 'Advanced Programming', '2', '1'),
 ('Data Management & Analytics', 'I212', 'Enterprise Data Management', '2', '1'),
 ('Data Management & Analytics (Plus 1 Year 3 Elective)', 'D311', 'Advanced Database Concepts', '3', 1'),
 ('Data Management & Analytics', 'I304', 'Data Analytics and Intelligence', '3', '2'),
 ('Data Management & Analytics', 'I301', 'Professional Practice', '3', '1'),
 ('Data Management & Analytics', 'I302', 'Industry Project', '3', '2'),
 ('Web and Mobile Development (Plus 5 Year 2 Electives)', 'D211', 'Database Development', '2', '1'),
 ('Web and Mobile Development', 'I213', 'Dynamic Web Soultions', '2', '2'),
 ('Web and Mobile Development', 'I203', 'Digital Multimedia', '2', '1'),
 ('Web and Mobile Development', 'D303', 'Mobile Application Development', '3', '2'),
 ('Web and Mobile Development', 'I311', 'Advanced Web Solutions', '3', '1'),
 ('Web and Mobile Development', 'I302', 'Industry Project', '3', '2'),
 ('Web and Mobile Development', 'I301', 'Professional Practice', '3', '1'),
 ('Business and Systems Analysis (Plus 5 Year 2 Electives)', 'D211', 'Database Development', '2', '1'),
 ('Business and Systems Analysis, 'I221', 'Analysis and Design', '2', '2'),
 ('Business and Systems Analysis, 'D202', 'Software Process', '2', '2'),
 ('Business and Systems Analysis, 'I303', 'Management of Information and Communication Technology', '3', '2')

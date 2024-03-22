# Forager
This project develops a comprehensive database to support foraging activities, integrating detailed information about regional flora, fauna, and water sources. Designed with diagrams such as an Entity-Relationship (ER) model and Relational Schema, the database structures information on attributes such as medicinal benefits, identification guides, and locations. Our primary data were manually entered from authoritative sources, ensuring accuracy and reliability. Implemented with MariaDB, PHP, and CSS, this web application serves as a resource for identifying and using natural resources.
## Project Components
- Report on overall project(`Foraging_report.pdf`)
  - A comprehensive 41-page report detailing our motivation and design decisions. Includes visuals such as the ER model, relational database schema, metadata, and wireframes.
- Database Schema Setup (`Foraging_DDL.sql`)
  - Creates the database tables with all the related columns. Tables include Region, Plant, Animal, Water, States, User, Suggestion, Medicinal_uses, Resides_in, Contains, and Has
- Populating Database Tables (`Foraging_DML.sql`)
  - Fills tables with data about flora and fauna sourced from books such as Billy Joe Tatum’s Wild Food Cookbook & Field Guide, Tom Brown’s Guide to Wild Edible and Medicinal Plants, and Edible Wild Plants by Oliver Perry Medsger. Artificial users were created for database examples.
- Example queries and modification of database(`Foraging_statments.sql`)
  - Statements for specific queries using more advanced SQL operations, and modifications such as deleting and updating tables
- Web Application Implementation (`/Foraging_Website_Prototype`)
  - The web application is implemented with MariaDB, PHP, HTML, and CSS. It allows users to look up flora and fauna per region and see images and useful attributes about how to find them and their uses.

## Images
### ER Diagram
<img src="https://github.com/jccoulson/foraging-database/assets/28967794/a99211df-960c-4bab-b76a-672bf68dfaa6" width="600" height="500">

### Relational Database Schema
<img src="https://github.com/jccoulson/foraging-database/assets/28967794/5e1242a8-89b0-4385-8cec-15cb1f82ed9e" width="600" height="500">

### Data Flow Diagram
<img src="https://github.com/jccoulson/foraging-database/assets/28967794/4036a295-b661-4294-9211-fc220903274f" width="600" height="700">


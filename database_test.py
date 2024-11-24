import mysql.connector

# Establish the connection
conn = mysql.connector.connect(
    host="localhost",  # Host (use 'localhost' if MySQL is on your machine)
    user="mgs_user",   # Your MySQL username
    password="pa55word",  # Your MySQL password
    database="MSU_Movies"  # Your database name
)

# Check if connection was successful
if conn.is_connected():
    print("Successfully connected to the database")

# Create a cursor object
cursor = conn.cursor()

# Execute a SQL query (for example, get all records from the Movie table)
cursor.execute("SELECT * FROM Movie")

# Fetch all results
results = cursor.fetchall()

# Print the results
for row in results:
    print(row)

# Close the cursor and connection
cursor.close()
conn.close()

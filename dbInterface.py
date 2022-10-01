import sqlite3
from dataclasses import asdict, dataclass
from recipe_dataclass import Recipe


def create_db(db_name:str):
    pass

def query_db(db_name:str,disease_item:str):
    
    connection = sqlite3.Connection(db_name)
    cursor = connection.cursor()

    prepared_stmt = f"""SELECT * FROM RECIPES WHERE DISEASE_TYPE IS \"{disease_item}\" ORDER BY RANDOM() LIMIT 7;"""
    cursor.execute(prepared_stmt)
    rows = cursor.fetchall()
    print(rows)
    newlist = []
    for row in rows:
        recipe = Recipe()
        recipe.recipe_name = row[1]
        recipe.disease_type = row[2]
        recipe.ingredients = str(row[3]).split(',')
        newlist.append(asdict(recipe))
    print(newlist)
    return newlist
def main():
    query_db('app_db.db','DIABETIC')

if __name__ == "__main__":
    main()
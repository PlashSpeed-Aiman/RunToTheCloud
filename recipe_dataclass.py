from dataclasses import asdict, dataclass
from dataclasses import field
import json

from disease_index import Disease
@dataclass
class Recipe(object):
    
    recipe_name : str = ""
    disease_type : str = ""
    ingredients: list[str] = field(default_factory=list)
    
def main():
    recipe_1 = Recipe(recipe_name="Nasi Goreng")
    recipe_2 = Recipe(recipe_name="Ayam Goreng")
    recipe_1.ingredients = ["1 tbsp of dry oregano","1 tbsp of cheese power"]
    recipe_2.ingredients = ["1 tbsp of dry oregano", "1 tbsp of cheese power"]
    newlist = [recipe_1,recipe_2]
    newnewlist = []
    for var in newlist:
        newnewlist.append(asdict(var))

    print(newnewlist)


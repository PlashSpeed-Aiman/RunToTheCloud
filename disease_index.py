from enum import Enum
from dataclasses import dataclass

@dataclass
class Disease(object):
    diabetic = "DIABETIC"
    hbp      = "HIGH BLOOD PRESSURE"
    
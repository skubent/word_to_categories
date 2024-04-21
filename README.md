# Legend

When creating orders, clients provide a brief description of the order. if the description does not match the contents, the courier has the right to refuse the order and client may be fined, so clients, as a rule, write the truth.

Our goal is to assign one of the categories to the order according to its description.

Unfortunately, we cant solve this problem by using ML-based categorization or similar due to very small descriptions which usually contain only 2-4 words.

Instead, we have a set of rules to assign orders to categories:

- If the orders description contains a word/phrase from the "excluded phrases" array - this order should not be assigned to the corresponding category
- If the orders description contains a word/phrase from the "related phrases" array - this order can be assigned to the corresponding category
- If no one category cant be found for order - this order should be assigned to "Common" category
- If more than one category found for order - this order can be assigned to any category, excluding "Common"

### Task 1

Your first task is implement method getCategory() in solution1.file, using data from Categories:
- Categories::$activeList - list of currently active categories
- Categories::$relatedPhrases - list of words/phrases related to categories in format categoryName => [phrase1, phrase2, ...],
- Categories::$excludedPhrases - list of words/phrases which that indicate what should be excluded from the categories in format categoryName => [phrase1, phrase2, ...]

Expected output:

<details>
<summary>
php solution1.php
</summary>

Meat pie : Food  
Bring me potato and cheese, please : Food  
Pets vitamin                       : Medicine   
A small amount of cooking rice     : Common  
Electric chess                     : Common  
Healthy food                       : Common  
Toy for pet                        : Common  
A little present                   : Common  
Painkiller without prescription    : Forbidden goods  
Some beer                          : Forbidden goods  
</details>

### Task 2
After launching the first version of the categorizer, it turned out that clients were making typos sometimes.

We decide to add following rules to our solution:

- We count missing, added or changed symbol (letter, punctuation or space) as single typo.
- If the order can be assigned to exactly one category except "Common" - the algorithm should finish.
- Otherwise we should try to find exactly one category assuming the client made one typo;
- if unsuccessful we should try to find exactly one category assuming the client made two typos;
- if unsuccessful again we should assign "Common" category;

You second task is implement method getCategory() in solution2.file, using same data from Categories.

Expected output:

<details>
<summary>
php solution2.php
</summary>

Mead pie : Food  
Bring me potato and chesepleas : Food  
Pets vitamins                  : Medicine  
A small amount of boiledrice   : Food  
Painkiller without prescript   : Medicine  
Some bee hive                  : Forbidden goods  
Healthyfood                    : Common
</details>

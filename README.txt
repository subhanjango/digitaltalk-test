## Thoughts about the code.

The code uses repository pattern , it gives the impression the logic is abstracted inside the repo class. However, there are some parts of the code like validation , sanitization which is also being done by the repository
itself which shouldn't have been done , for validation request classes should have been created with proper validations and sanitizations. Most of the code was redundant which could have been solved by breaking the logic
into functions for re-usability.

The structure of the code base could have been better if proper MVC pattern was followed with all the standards the Laravel framework itself gives out of the box.

Code had a lot of block codes which made the code less readable and maintainable.

To improve the codebase, I would have restructured it following the MVC pattern strictly, adhering to Laravel's conventions. This involves creating dedicated request classes for validation and sanitization, breaking down logic into smaller, reusable functions, and ensuring a clean separation of concerns. Additionally, I would work towards eliminating redundant code and adopting a more modular approach to enhance both readability and maintainability.

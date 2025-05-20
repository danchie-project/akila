# Akila

## Description

This repository is for the Akila Project

## Rules

### CSS Naming Convention

This project is using Block Element Modifier (BEM) naming convention for the CSS. Implementing BEM in your projects is easy. Here are the steps to follow:

- Choose a Block name and add it to the parent element's class
- Choose an Element name and add it to the child element's class
- If you need to modify the Block or Element, choose a Modifier name and add it to the class.
  Example:

```html
<nav class="nav">
    <div class="nav__container">
        <ul class="nav__list">
            <li class="nav__item">
            <a href="#" class="nav__link">Home</a>
            </li>
            <li class="nav__item nav__item--active">
            <a href="#" class="nav__link">About</a>
            </li>
            <li class="nav__item">
            <a href="#" class="nav__link">Contact</a>
            </li>
        </ul>
    </div>
</nav>
```

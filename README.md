# polymer-login-form
Simple Polymer Login form that provides the following features:
  - Displays a form containing: email input + password input + submit button.
  - Email placeholder can be specified as an element attribute.
  - Email and password initial values can also be specified as attributes.
  - Password minimal length also can be specified in the params.
  - Email is automatically validated.
  - If "failed" attribute is passed with the value "true", an error message is displayed.

### Examples:

```html
<login-form email_placeholder="email@site.com"></login-form>
<login-form email="youssef@gmail.com"></login-form>
<login-form email="youssef@gmail.com" password="123456" handler="http://www.google.com" failed="true"></login-form>
```

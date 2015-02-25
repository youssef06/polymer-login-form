# polymer-login-form
Check Demo [here](http://youssef06.github.io/polymer-login-form/demo.html).

Simple Polymer Login form that provides the following features:
  - Displays a form containing: email input + password input + submit button.
  - Email placeholder can be specified as an element attribute.
  - Email and password initial values can also be specified as attributes.
  - Password minimal length also can be specified in the params.
  - Email is automatically validated.
  - If "failed" attribute is passed with the value "true", an error message is displayed.

### Install:
```sh
$ bower install login-form
```

### Examples:

```html
<login-form email_placeholder="email@site.com"></login-form>
<login-form email="youssef@gmail.com"></login-form>
<login-form email="youssef@gmail.com" password="123456" handler="http://www.google.com" failed="true"></login-form>
```

email email_placeholder password password_min_length handler failed

### Options:
Attribute  | Options        | Default             | Description
---        | ---         | ---                 | ---
`email_placeholder` | *string*   | `Email address`             | Placeholder to be displayed on email input if no email specified.
`email`   | *string*    |     | Default value for email input.
`password`   | *string*    |     | Default value for password input.
`password_min_length`     | *integer*    | 6   | Minimum length accepted for the password attribute.
`handler`     | *string*    |  `#`  | Handler URL, will be used as form action attribute.
`failed`     | *boolean*    |  false  | If true an error message is displayed.
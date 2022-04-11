# SilverStripe Elemental Code Editor Field

A block that displays raw code, editable through an ace editor field
(private project, no help/support provided)

## Requirements

* SilverStripe CMS ^4.3
* dnadesign/silverstripe-elemental ^4.0
* jinjie/codeeditorfield ^0.0.4


For a SilverStripe 4.2 and Elemental 3.x compatible version of this module, please see the [1.x release line](https://github.com/derralf/silverstripe-elemental-image-teaser/tree/1.0#readme).


## Suggestions
* derralf/elemental-styling

Modify `/templates/Derralf/Elements/ImageTeaser/Includes/Title.ss` to your needs when using StyledTitle from derralf/elemental-styling.


## Installation

- Install the module via Composer
  ```
  composer require derralf/elemental-codeeditorfield
  ```


## Configuration

A basic/default config. Add this to your **mysite/\_config/elements.yml**

Note the options for `styles` and `image_view_modes`, in which the templates contained in the extension are listed.

Set `defaults:ImageViewMode` to `null` or any of the avaiable Templates from `image_view_modes`.

Optionally you may set `defaults:Style`to any of the available `styles`.

```

##############################################################
# Template/Example for Bootstrap 3
##############################################################

---
Name: elementalcodeeditorfield
After: 'elemental-codeeditorfield'
---

Derralf\Elements\ImageTeaser\Element\ElementCodeEditorField:
  # default editor language
  defaultProgrammingLanguageMode: 'ace/mode/html'
  # disable StyledTitle
  title_tag_variants: null
  title_alignment_variants: null
  # styles
  style_default_description: 'Standard: 2 Spalten'
  styles:
    DefaultWell: 'with well'
    FullWidthWell: 'with well and full width (Container-Breakout)'


#
# OR
#


##############################################################
# Template/Example for Bootstrap 4
##############################################################

---
Name: elementalcodeeditorfield
After: 'elemental-codeeditorfield'
---

Derralf\Elements\ImageTeaser\Element\ElementCodeEditorField:
  # default editor language
  defaultProgrammingLanguageMode: 'ace/mode/html'
  # disable StyledTitle
  title_tag_variants: null
  title_alignment_variants: null
## Bootstrap 4 default/example config
styles:
  BS4Card: 'with well (BS4-card)'
  BS4FullWidthCard: 'with well (BS4-card) and full width (Container-Breakout)'
styles_default_description: ''
colors:
  bg-primary: 'primary'
  bg-secondary: 'secondary'
  bg-light: 'light'
  bg-success: 'success'
  bg-danger: 'danger'
  bg-warning: 'warning'
  bg-info: 'info'
  bg-dark: 'dark'


```

Additionally you may apply the default styles:

```
# add default styles
DNADesign\Elemental\Controllers\ElementController:
  default_styles:
    # boptstrap 3 example styles
    - derralf/elemental-codeeditorfield:client/dist/styles/frontend-default.css
    # boptstrap 4 example styles
    - derralf/elemental-codeeditorfield:client/dist/styles/frontend-bootstrap-4-example.css
```

See Elemental Docs for [how to disable the default styles](https://github.com/dnadesign/silverstripe-elemental#disabling-the-default-stylesheets).

### Adding your own templates

You may add your own templates/styles like this:

```
Derralf\Elements\ImageTeaser\Element\ElementCodeEditorField:
  styles:
    MyCustomTemplate: "new customized special Layout"
```

...and put a template named `ElementCodeEditorField_MyCustomTemplate.ss`in `themes/{your_theme}/templates/Derralf/Elements/CodeEditorField/Element/`  
**and/or**
add styles for `.derralf__elements__codeEditorfield__element__elementcodeeditorfield.mycustomtemplate` to your style sheet



## Template Notes

Included templates are based on Bootstrap 3+ but may require extra/additional styling (see included stylesheet).

- Optionaly, you can require basic CSS stylings provided with this module to your controller class like:
  **mysite/code/PageController.php**
  ```
      Requirements::css('derralf/elemental-codeeditorfield:client/dist/styles/frontend-default.css');
  ```
  or copy over and modify `client/src/styles/frontend-default.scss` in your theme scss


## Screen Shots

(not available)



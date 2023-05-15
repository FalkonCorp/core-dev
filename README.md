# VDD
Debugger functions to help visualize variable contents.  
Useful when, for some reason you don't have XDebug installed on the server and  
  need to perform a quick analisys of the variables contents.


# Content
Features:
- Indicate variables types;
- Indicate file and line of the caller; (When available at the server);
- HTML formated output;
- Stylized output;
- Short name for easy typing while developing;

To Do:
- Avoid circular reference;
- Customize output style;


# Install
Just require the VDD.php, and thats it.  

If using composer it already do it.  


# Usage
```php
VD($someVarA);  //VarDump contents;
VD($someVarB);  //VarDump contents;
VD($someVarC);  //VarDump contents;
VDD($someVarD); //VarDump contents and die;
someFunction(); //Not called;

```

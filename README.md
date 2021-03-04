# Plugins and Observers Workshop

## Challenge

> The order of the plugins is listed below
There are 4 plugins for the `setTitle` method:
* A
    * afterSetTitle
* B
    * aroundSetTitle
    * afterSetTitle
* C
    * beforeSetTitle
* D
    * beforeSetTitle
    * aroundSetTitle
    * afterSetTitle

> Note around plugins call original method and there are no exceptions
What is the execution sequence of those plugins? Example:
* PuginX -> afterSetTitle
* PluginY-> SetTitle

## Results

   --  | Plugin A      | Plugin B        | Plugin C       | Plugin D       |
-------|---------------|-----------------|----------------|----------------|
before |               |                 | beforeSetTitle | beforeSetTitle |
around |               | aroundSetTitle  |                | aroundSetTitle |
after  | afterSetTitle  | afterSetTitle  |                | afterSetTitle  |

---

- Plugin B around set title (1)
    - Plugin C beforeSetTitle
    - Plugin D beforeSetTitle
        - Plugin D around set title (1)
            - Method
        - Plugin D around set title (2)
    - Plugin D afterSetTitle
- Plugin B around set title (2)
- Plugin A afterSetTitle
- Plugin B afterSetTitle

## References:

[Magento 2 Events List](https://www.mageplaza.com/magento-2-module-development/magento-2-events.html)

[Events and Observers Dev Docs](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/events-and-observers.html)

[Plugins Magento Dev Docs](https://devdocs.magento.com/guides/v2.4/extension-dev-guide/plugins.html)

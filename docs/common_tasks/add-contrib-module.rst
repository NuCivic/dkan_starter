Add a contributed module
------------------------

Whenever you want to add a module (no matter if it's custom or not) you need to guarantee two specific conditions:

1. The module needs to be added to the **codebase**
2. The module needs to be added to the project's **make file** so if the website gets rebuild (for instance when dkan get's updated), the module remains in the **codebase** and doesn't get deleted

Let's say, for instance, that we want to add the `ShareThis <https://www.drupal.org/project/sharethis>`_ module to the project.

Add the module to the custom.make file
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Add the following line to the cusmom.make

.. code-block:: bash

  projects[] = sharethis

If you need the project to be at a specific version then you can add this instead:

.. code-block:: bash

  projects[sharethis][version] = 2.12


Add the module to custom_config
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Add the module to the custom_config.features.features_master.inc file:

.. code-block:: bash

  $features_master = data_config_enabled_modules();
  $features_master['modules']['sharethis'] = 'sharethis',

Remake the project
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

Run:

.. code-block:: bash

  ahoy build custom

That should put the **sharethis** module at ``docroot/sites/all/modules/contrib``.

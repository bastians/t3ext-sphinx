﻿.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../../Includes.txt


.. _admin-rendering-pdf:

Rendering PDF from reStructuredText
-----------------------------------

Sphinx is using *builders* to produce output. The builder’s "name" for PDF is either :program:`latex` (best output)
or :program:`rst2pdf`.

:program:`rst2pdf` is a tool written in Python and available off http://rst2pdf.ralsina.me/. This tool may be
automatically installed and configured when configuring this extension. PDF output with :program:`rst2pdf` is by far not
as good as when using LaTeX but it has the real advantage of not requiring you to install a full LaTeX stack on your machine.

.. caution::
	**MS Windows Users:** Automatic installation of :program:`rst2pdf` is unfortunately not yet supported for you as it
	requires additional components such as a GCC compiler. Please refer to https://forge.typo3.org/issues/49530.

The remainder of this chapter guides you through installation and configuration of LaTeX:

.. toctree::
	:maxdepth: 5
	:titlesonly:

	InstallingLaTeXLinux
	InstallingLaTeXWindows
	InstallingShareFont

#!/bin/bash

#  
#  Copyright notice
#
#  (c) 2008 Martin Helmich, Mittwald CM Service
#  All rights reserved
#
#  This script is part of the TYPO3 project. The TYPO3 project is
#  free software; you can redistribute it and/or modify
#  it under the terms of the GNU General Public License as published by
#  the Free Software Foundation; either version 2 of the License, or
#  (at your option) any later version.
#
#  The GNU General Public License can be found at
#  http://www.gnu.org/copyleft/gpl.html.
#
#  This script is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU General Public License for more details.
#
#  This copyright notice MUST APPEAR in all copies of the script!
#  

#
#  This script is a starter script for the mm_forum indexing cronjob.
#  Basically, it just calls the tx_mmforum_cron.sh script with one additional
#  parameter.
#
#  AUTHOR    Martin Helmich <m.helmich@mittwald.de>
#  COPYRIGHT 2009 Mittwald CM Service GmbH & Co. KG
#  VERSION   $Id: tx_mmforum_publish.sh 24605 2009-09-17 19:48:38Z mhelmich $
#

THIS_DIR=$(dirname $(readlink -f "${0}"))

${THIS_DIR}/tx_mmforum_cron.sh "publish" $@


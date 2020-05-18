<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2020 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\GedcomElements;

/**
 * MULTIMEDIA_FORMAT := {Size=3:4}
 * [ bmp | gif | jpg | ole | pcx | tif | wav ]
 * Indicates the format of the multimedia data associated with the specific
 * GEDCOM context. This allows processors to determine whether they can process
 * the data object. Any linked files should contain the data required, in the
 * indicated format, to process the file data.
 */
class MultimediaFormat extends AbstractElement
{
}
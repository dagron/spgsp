<?php

/*
 * Copyright (C) 2019 Pietro Baldassarri <pietro.baldassarri@gmail.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Bnza\SPgSp\Tests\Fixtures;

/**
 * Description of MultiPointEntity
 *
 * @author Pietro Baldassarri <pietro.baldassarri@gmail.com>
 *
 * @Entity
 * @Table(name="multipoint_test_table")
 */
class MultiPointEntity {
    /**
     * @var int $id
     *
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer")
     */
    protected $id;

    /**
     * @var MultiPoint $point
     *
     * @Column(type="multipoint", nullable=true)
     */
    protected $geom;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set point
     *
     * @param string $geom
     *
     * @return self
     */
    public function setGeom(string $geom)
    {
        $this->geom = $geom;

        return $this;
    }

    /**
     * Get multipoint
     *
     * @return MultiPoint
     */
    public function getGeom()
    {
        return $this->geom;
    }
}

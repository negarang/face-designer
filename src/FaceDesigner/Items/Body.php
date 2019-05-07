<?php
/**
 * Project: Negarang FaceDesigner
 * This file is part of FaceDesigner.
 *
 * (c) Milad Abdollahnia
 * http://milad-ab.ir
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Negarang\FaceDesigner\Items;

use Negarang\FaceDesigner\Item;
use Negarang\FaceDesigner\Items\Wearable\Glasses;
use Negarang\FaceDesigner\Items\Wearable\Hat;
use Negarang\FaceDesigner\Items\Wearable\Jacket;
use Negarang\FaceDesigner\Items\Wearable\Scarf;
use Negarang\FaceDesigner\Items\Wearable\Shirt;

/**
 * Class Body
 * @package Negarang\FaceDesigner\Items
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
class Body extends Item {

    /**
     * @var string
     */
    static protected $graphicsParentDir = "body";

    /**
     * @var string
     */
    static protected $graphicsDir = "shape";

    /**
     * @var int
     */
    static protected $minId = self::ID_RST_ITEM;

    /**
     * @var int
     */
    static protected $maxId = self::ID_RST_ITEM;

    /**
     * @var int[] X,Y
     */
    static protected $position = [26, 134];

    /**
     * @var string[]
     */
    static protected $colors = ["plain", "dark", "light"];

    /**
     * @var Shirt
     */
    private $shirt;

    /**
     * @var Jacket
     */
    private $jacket;

    /**
     * @var Scarf
     */
    private $scarf;

    /**
     * @var Hat
     */
    private $hat;

    /**
     * @var Glasses
     */
    private $glasses;

    /**
     * Body constructor.
     * @param int $id
     * @param int $colorId
     */
    public function __construct($id, $colorId) {
        parent::__construct($id, $colorId);
    }

    /**
     * @param int $id
     * @param int $colorId
     * @return $this
     */
    public function wearShirt($id, $colorId) {
        $this->shirt = new Shirt($id, $colorId);
        return $this;
    }

    /**
     * @return Shirt
     */
    public function getShirt() {
        return $this->shirt;
    }

    /**
     * @param int $id
     * @param int $colorId
     * @return $this
     */
    public function wearJacket($id, $colorId) {
        $this->jacket = new Jacket($id, $colorId);
        return $this;
    }

    /**
     * @return Jacket
     */
    public function getJacket() {
        return $this->jacket;
    }

    /**
     * @param int $id
     * @param int $colorId
     * @return $this
     */
    public function wearScarf($id, $colorId) {
        $this->scarf = new Scarf($id, $colorId);
        return $this;
    }

    /**
     * @return Scarf
     */
    public function getScarf() {
        return $this->scarf;
    }

    /**
     * @param int $id
     * @param int $colorId
     * @param int $distance In PX
     * @return $this
     */
    public function wearHat($id, $colorId, $distance) {
        $this->hat = new Hat($id, $colorId, $distance);
        return $this;
    }

    /**
     * @return Hat
     */
    public function getHat() {
        return $this->hat;
    }

    /**
     * @param int $id
     * @param int $distance In PX
     * @return $this
     */
    public function wearGlasses($id, $distance) {
        $this->glasses = new Glasses($id, $distance);
        return $this;
    }

    /**
     * @return Glasses
     */
    public function getGlasses() {
        return $this->glasses;
    }
}
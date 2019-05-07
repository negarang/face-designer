<?php
/**
 * Project: Negarang FaceApp
 * This file is part of Negarang.
 *
 * (c) Milad Abdollahnia
 * http://milad-ab.ir
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Negarang\FaceDesigner;

use Negarang\FaceDesigner\Items\Background\Filled;
use Negarang\FaceDesigner\Items\Background\Pattern;
use Negarang\FaceDesigner\Items\Background\Theme;
use Negarang\FaceDesigner\Items\Body;
use Negarang\FaceDesigner\Items\Effect\Weather;
use Negarang\FaceDesigner\Items\Head;
use Negarang\FaceDesigner\Items\Head\Beard;
use Negarang\FaceDesigner\Items\Head\Hair;
use Negarang\FaceDesigner\Items\Head\HairBack;
use Negarang\FaceDesigner\Items\Head\LeftEar;
use Negarang\FaceDesigner\Items\Head\LeftEye;
use Negarang\FaceDesigner\Items\Head\LeftEyebrow;
use Negarang\FaceDesigner\Items\Head\LeftEyeShadow;
use Negarang\FaceDesigner\Items\Head\Mouth;
use Negarang\FaceDesigner\Items\Head\Mustache;
use Negarang\FaceDesigner\Items\Head\Nose;
use Negarang\FaceDesigner\Items\Head\RightEar;
use Negarang\FaceDesigner\Items\Head\RightEye;
use Negarang\FaceDesigner\Items\Head\RightEyebrow;
use Negarang\FaceDesigner\Items\Head\RightEyeShadow;
use Negarang\FaceDesigner\Items\Wearable\Glasses;
use Negarang\FaceDesigner\Items\Wearable\Hat;
use Negarang\FaceDesigner\Items\Wearable\Jacket;
use Negarang\FaceDesigner\Items\Wearable\Scarf;
use Negarang\FaceDesigner\Items\Wearable\Shirt;
use Negarang\FaceDesigner\Items\Head\HeadItem;

/**
 * Class AppApi
 * @package Negarang\FaceApp
 * @author Milad Abdollahnia (milad_abdollahnia@yahoo.com)
 */
class ApiProvider {

    /**
     * The Map.
     * @var array
     */
    private $map = [
        "head" => [
            "shape" => [
                "class" => Head::class,
                "priority" => 410
            ],
            "hair" => [
                [
                    "class" => Hair::class,
                    "priority" => 600,
                    "dependency" => [
                        "class" => HairBack::class,
                        "priority" => 200
                    ]
                ]
            ],
            "ears" => [
                [
                    "class" => LeftEar::class,
                    "priority" => 400
                ],
                [
                    "class" => RightEar::class,
                    "priority" => 400
                ]
            ],
            "eyebrows" => [
                [
                    "class" => LeftEyebrow::class,
                    "priority" => 480,
                    "dependency" => [
                        "class" => LeftEyeShadow::class,
                        "priority" => 460,
                    ]
                ],
                [
                    "class" => RightEyebrow::class,
                    "priority" => 480,
                    "dependency" => [
                        "class" => RightEyeShadow::class,
                        "priority" => 460,
                    ]
                ]
            ],
            "eyes" => [
                [
                    "class" => LeftEye::class,
                    "priority" => 470
                ],
                [
                    "class" => RightEye::class,
                    "priority" => 470
                ]
            ],
            "nose" => [
                "class" => Nose::class,
                "priority" => 450
            ],
            "mouth" => [
                "class" => Mouth::class,
                "priority" => 430
            ],
            "mustache" => [
                "class" => Mustache::class,
                "priority" => 440
            ],
            "beard" => [
                "class" => Beard::class,
                "priority" => 420
            ]
        ],
        "body" => [
            "shape" => [
                "class" => Body::class,
                "priority" => 210
            ]
        ],
        "wearable" => [
            "shirt" => [
                "class" => Shirt::class,
                "priority" => 300
            ],
            "jacket" => [
                "class" => Jacket::class,
                "priority" => 310
            ],
            "scarf" => [
                "class" => Scarf::class,
                "priority" => 320
            ],
            "hat" => [
                "class" => Hat::class,
                "priority" => 700
            ],
            "glasses" => [
                "class" => Glasses::class,
                "priority" => 500
            ]
        ],
        "background" => [
            "filled" => [
                "class" => Filled::class,
                "priority" => 100
            ],
            "pattern" => [
                "class" => Pattern::class,
                "priority" => 110
            ],
            "theme" => [
                "class" => Theme::class,
                "priority" => 120
            ]
        ],
        "effect" => [
            "weather" => [
                "class" => Weather::class,
                "priority" => 800
            ]
        ]
    ];

    /**
     * The Manifest.
     * @var array
     */
    private $manifest = [
        "resource_prefix" => [],
        "resource_postfix" => [],
        "color_set" => [],
        "items" => [],
        "relations" => [],
        "initial_values" => [],
        "view_config" => []
    ];

    private $colorCodes = [];

    /**
     * @var string
     */
    private $jsonFilePrefix = "fd_";

    /**
     * AppApi constructor.
     * @param $resourceDir
     */
    public function __construct($resourceDir) {
        $this->manifest["resource_prefix"] = $resourceDir . '/';
        $this->manifest["resource_postfix"] = Item::getFileNamePattern();
        $this->manifest["relations"] = $this->getRelationsMap();
        $this->manifest["initial_values"] = [
            "i" => Item::getInitialId(),
            "c" => Item::getInitialColorId(),
            "d" => Item::getInitialDistance()
        ];
    }

    /**
     * @return array
     */
    private function getRelationsMap() {
        $map = [
            "hairs_hat" => []
        ];
        foreach (Hair::getShortHairs() as $id) {
            $map["hairs_hat"][$id] = Hat::SIZE_MODE_SMALL;
        }
        foreach (Hair::getMediumHairs() as $id) {
            $map["hairs_hat"][$id] = Hat::SIZE_MODE_MEDIUM;
        }
        foreach (Hair::getLongHairs() as $id) {
            $map["hairs_hat"][$id] = Hat::SIZE_MODE_LARGE;
        }
        foreach (Hair::getVeryLongHairs() as $id) {
            $map["hairs_hat"][$id] = Hat::SIZE_MODE_MEDIUM;
        }

        return $map;
    }

    /**
     * @param callable $callback
     */
    private function getItemsRules(callable $callback) {
        // TODO Define a constant value for each item class and pass its name.
        // TODO If rule is repetitive only point to the first one. Just run callback and remove the loops.
        foreach (Hat::getSwimCaps() as $id) {
            $callback("wearable", "hat", $id, [
                "head" => [
                    "hair" => $this->formatRule(Item::ID_RST_ITEM),
                    "ears" => $this->formatRule(Item::ID_RST_ITEM)
                ]
            ]);
        }
        foreach (Hat::getCoveredHats() as $id) {
            $callback("wearable", "hat", $id, [
                "head" => [
                    "hair" => $this->formatRule(Hair::getBaldStyle(),
                        Hair::getVeryLongHairs())
                ]
            ]);
        }
        foreach (Hair::getCoveredHairs() as $id) {
            $callback("head", "hair", $id, [
                "head" => [
                    "ears" => $this->formatRule(Item::ID_RST_ITEM)
                ]
            ]);
        }
    }

    /**
     * @param int $itemId
     * @param array $conditions
     * @return array
     */
    private function formatRule($itemId, $conditions=[]) {
        $rule = [
            "i" => $itemId
        ];
        if (!empty($conditions)) {
            $rule["conditions"] = $conditions;
        }

        return $rule;
    }

    /**
     * @param $class \Negarang\FaceDesigner\Item
     * @return array
     */
    private function buildFormat($class) {
        $format = [
            // i: Item ID.
            "i" => $class::getDefaultId(),
        ];
        if ($class::isColorful()) {
            // c: Color ID.
            $format["c"] = $class::getDefaultColorId();
        }
        if ($class::isMovable()) {
            // d: Distance.
            $format["d"] = $class::getDefaultDistance();
        }

        return $format;
    }

    /**
     * @param \Negarang\FaceDesigner\Item $class
     * @param int $priority
     * @param \Negarang\FaceDesigner\Item $depClass Dependency Class.
     * @param int $depPriority Dependency Priority.
     * @return array
     */
    private function bindItem($class, $priority, $depClass=null, $depPriority=-1) {
        // Color-Set configurations for the item.
        $colorSet = $colorGroup = 0;
        if (!empty($class::getColors())) {
            $cCode = md5(implode(",", $class::getColors()));
            if (!array_key_exists($cCode, $this->colorCodes)) {
                $this->colorCodes[$cCode] = count($this->manifest["color_set"]) + 1;
                $this->manifest["color_set"][$this->colorCodes[$cCode]] = $class::getColors();
            }
            $colorSet = $this->colorCodes[$cCode];
            if (is_subclass_of($class, HeadItem::class)
                || is_a($class, Head::class, true)) {
                $colorGroup = $colorSet;
            }
        }
        // Bind all properties of the item.
        $item = [
            "id_max" => $class::getMaxId(),
            "resource" => $class::getDirectoryPattern(),
            "position" => $class::getPosition(),
            "priority" => $priority
        ];
        // If Minimum ID is specified.
        if ($class::getMinId() > Item::getMinId()) {
            $item["id_min"] = $class::getMinId();
        }
        if ($class::isMovable()) {
            $item["distance_range"] = $class::getDistancesRange();
        }
        if ($colorSet > 0) {
            $item["color_set"] = $colorSet;
            if ($colorGroup > 0) {
                $item["color_group"] = $colorGroup;
            }
        }
        // If item has dependency.
        if ($depClass !== null && $depPriority > -1) {
            $item["dependency"] = $this->bindItem($depClass, $depPriority);
        }

        return $item;
    }

    /**
     * @param $jsonDirectory
     * @param $fileName
     * @param $data
     * @return null|string
     */
    private function buildFile($jsonDirectory, $fileName, &$data) {
        if (!is_dir($jsonDirectory)) {
            mkdir($jsonDirectory, 0777, true);
        }
        $path = $jsonDirectory . $this->jsonFilePrefix
            . $fileName . ".json";
        $result = file_put_contents($path, json_encode($data));
        return ($result !== false) ? $path : null;
    }

    /**
     * @param $jsonDirectory
     * @return bool
     */
    public function make($jsonDirectory) {
        // The format which client must return to the server.
        $dataFormat = [];

        foreach ($this->map as $iKey => $i) {
            foreach ($i as $jKey => $j) {
                if (array_key_exists("class", $j)) {
                    $j = [$j];
                }
                foreach ($j as $k) {
                    /** @var \Negarang\FaceDesigner\Item $class */
                    $class = $k["class"];
                    $priority = $k["priority"];
                    $this->manifest["items"][$iKey][$jKey][] = array_key_exists("dependency", $k) ?
                        $this->bindItem($class, $priority, $k["dependency"]["class"],
                            $k["dependency"]["priority"]) :
                        $this->bindItem($class, $priority);
                    // Config: Define Sections.
                    foreach ($class::getSlices() as $sId => $sName) {
                        $this->manifest["view_config"][$iKey][$jKey]["sections"][] = [
                            "name" => $sName,
                            "first_id" => $sId
                        ];
                    }
                    $dataFormat[$iKey][$jKey] = $this->buildFormat($class);
                }
            }
        }

        self::getItemsRules(function ($parent, $item, $id, $rule) {
            $this->manifest["items"][$parent][$item][0]["rules"][$id] = $rule;
        });

        $path = $this->buildFile($jsonDirectory, "data_format", $dataFormat);
        if ($path !== null)
            echo "File Generated: " . $path . "\r\n";
        $path = $this->buildFile($jsonDirectory, "manifest", $this->manifest);
        if ($path !== null)
            echo "File Generated: " . $path . "\r\n";

        return true;
    }
}
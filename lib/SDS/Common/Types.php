<?php
namespace SDS\Common;

/**
 * Autogenerated by Thrift Compiler (0.9.2)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


/**
 * thrift传输协议
 */
final class ThriftProtocol {
  /**
   * TCompactProtocl
   */
  const TCOMPACT = 0;
  /**
   * TJSONProtocol
   */
  const TJSON = 1;
  /**
   * TBINARYProtocol
   */
  const TBINARY = 2;
  /**
   * TBINARYProtocolAccelerated, 优化PHP/Python客户端thrift序列化性能
   */
  const TBINARYACCELERATED = 3;
  static public $__names = array(
    0 => 'TCOMPACT',
    1 => 'TJSON',
    2 => 'TBINARY',
    3 => 'TBINARYACCELERATED',
  );
}

/**
 * 版本号，规则详见http://semver.org
 */
class Version {
  static $_TSPEC;

  /**
   * 主版本号，不同版本号之间不兼容
   * 
   * @var int
   */
  public $major = 1;
  /**
   * 次版本号，不同版本号之间向后兼容
   * 
   * @var int
   */
  public $minor = 0;
  /**
   * 构建版本号，不同版本之间互相兼容
   * 
   * @var string
   */
  public $patch = "a68612c7";
  /**
   * 附加信息
   * 
   * @var string
   */
  public $comments = "";

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'major',
          'type' => TType::I32,
          ),
        2 => array(
          'var' => 'minor',
          'type' => TType::I32,
          ),
        3 => array(
          'var' => 'patch',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'comments',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['major'])) {
        $this->major = $vals['major'];
      }
      if (isset($vals['minor'])) {
        $this->minor = $vals['minor'];
      }
      if (isset($vals['patch'])) {
        $this->patch = $vals['patch'];
      }
      if (isset($vals['comments'])) {
        $this->comments = $vals['comments'];
      }
    }
  }

  public function getName() {
    return 'Version';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->major);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->minor);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->patch);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->comments);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Version');
    if ($this->major !== null) {
      $xfer += $output->writeFieldBegin('major', TType::I32, 1);
      $xfer += $output->writeI32($this->major);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->minor !== null) {
      $xfer += $output->writeFieldBegin('minor', TType::I32, 2);
      $xfer += $output->writeI32($this->minor);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->patch !== null) {
      $xfer += $output->writeFieldBegin('patch', TType::STRING, 3);
      $xfer += $output->writeString($this->patch);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->comments !== null) {
      $xfer += $output->writeFieldBegin('comments', TType::STRING, 4);
      $xfer += $output->writeString($this->comments);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

final class Constant extends \Thrift\Type\TConstant {
  static protected $DEFAULT_CLIENT_TIMEOUT;
  static protected $DEFAULT_MAX_CLIENT_TIMEOUT;
  static protected $DEFAULT_ADMIN_CLIENT_TIMEOUT;
  static protected $DEFAULT_CLIENT_CONN_TIMEOUT;
  static protected $DEFAULT_SERVICE_ENDPOINT;
  static protected $DEFAULT_SECURE_SERVICE_ENDPOINT;
  static protected $API_ROOT_PATH;
  static protected $AUTH_SERVICE_PATH;
  static protected $ADMIN_SERVICE_PATH;
  static protected $TABLE_SERVICE_PATH;
  static protected $SCAN_COUNT;
  static protected $DEFAULT_THRIFT_HEADER;
  static protected $THRIFT_JSON_HEADER;
  static protected $THRIFT_COMPACT_HEADER;
  static protected $THRIFT_BINARY_HEADER;
  static protected $THRIFT_JSON_PROTOCOL_CLASS;
  static protected $THRIFT_BINARY_PROTOCOL_CLASS;
  static protected $THRIFT_COMPACT_PROTOCOL_CLASS;
  static protected $THRIFT_BINARY_PROTOCOL_ACCELERATED_CLASS;
  static protected $THRIFT_HEADER_MAP;
  static protected $HEADER_THRIFT_MAP;
  static protected $THRIFT_PROTOCOL_MAP;
  static protected $HK_REQUEST_TIMEOUT;
  static protected $HK_ERROR_CODE_HEADER;
  static protected $MAX_CONTENT_SIZE;

  static protected function init_DEFAULT_CLIENT_TIMEOUT() {
    return     /**
     * client端读写超时时间（ms）
     */
10000;
  }

  static protected function init_DEFAULT_MAX_CLIENT_TIMEOUT() {
    return     /**
     * client端最大读写超时时间（ms）
     */
10000;
  }

  static protected function init_DEFAULT_ADMIN_CLIENT_TIMEOUT() {
    return     /**
     * client端DDL操作超时时间（ms）
     */
30000;
  }

  static protected function init_DEFAULT_CLIENT_CONN_TIMEOUT() {
    return     /**
     * client端连接超时时间（ms）
     */
3000;
  }

  static protected function init_DEFAULT_SERVICE_ENDPOINT() {
    return     /**
     * HTTP RPC服务地址
     */
"http://sds.api.xiaomi.com";
  }

  static protected function init_DEFAULT_SECURE_SERVICE_ENDPOINT() {
    return     /**
     * HTTPS RPC服务地址
     */
"https://sds.api.xiaomi.com";
  }

  static protected function init_API_ROOT_PATH() {
    return     /**
     * RPC根路径
     */
"/v1/api";
  }

  static protected function init_AUTH_SERVICE_PATH() {
    return     /**
     * 权限RPC路径
     */
"/v1/api/auth";
  }

  static protected function init_ADMIN_SERVICE_PATH() {
    return     /**
     * 管理操作RPC路径
     */
"/v1/api/admin";
  }

  static protected function init_TABLE_SERVICE_PATH() {
    return     /**
     * 表数据访问RPC路径
     */
"/v1/api/table";
  }

  static protected function init_SCAN_COUNT() {
    return     /**
     * 开启ScanAction时， 获取操作数据的数目的key值
     */
"count";
  }

  static protected function init_DEFAULT_THRIFT_HEADER() {
    return     /**
     * 兼容其它SDK，等同于application/x-thrift-json
     */
"application/x-thrift";
  }

  static protected function init_THRIFT_JSON_HEADER() {
    return "application/x-thrift-json";
  }

  static protected function init_THRIFT_COMPACT_HEADER() {
    return "application/x-thrift-compact";
  }

  static protected function init_THRIFT_BINARY_HEADER() {
    return "application/x-thrift-binary";
  }

  static protected function init_THRIFT_JSON_PROTOCOL_CLASS() {
    return "TJSONProtocol";
  }

  static protected function init_THRIFT_BINARY_PROTOCOL_CLASS() {
    return "TBinaryProtocol";
  }

  static protected function init_THRIFT_COMPACT_PROTOCOL_CLASS() {
    return "TCompactProtocol";
  }

  static protected function init_THRIFT_BINARY_PROTOCOL_ACCELERATED_CLASS() {
    return "TBinaryProtocolAccelerated";
  }

  static protected function init_THRIFT_HEADER_MAP() {
    return array(
            0 => "application/x-thrift-compact",
            1 => "application/x-thrift-json",
            2 => "application/x-thrift-binary",
            3 => "application/x-thrift-binary",
    );
  }

  static protected function init_HEADER_THRIFT_MAP() {
    return array(
      "application/x-thrift-compact" =>       0,
      "application/x-thrift-json" =>       1,
      "application/x-thrift-binary" =>       2,
      "application/x-thrift" =>       1,
    );
  }

  static protected function init_THRIFT_PROTOCOL_MAP() {
    return array(
            0 => "TCompactProtocol",
            1 => "TJSONProtocol",
            2 => "TBinaryProtocol",
            3 => "TBinaryProtocolAccelerated",
    );
  }

  static protected function init_HK_REQUEST_TIMEOUT() {
    return     /**
     * HTTP请求的超时时限
     */
"X-Xiaomi-Request-Timeout";
  }

  static protected function init_HK_ERROR_CODE_HEADER() {
    return     /**
     * HTTP头的错误码
     */
"X-Xiaomi-Error-Code";
  }

  static protected function init_MAX_CONTENT_SIZE() {
    return     /**
     * HTTP Body最大字节数
     */
524288;
  }
}



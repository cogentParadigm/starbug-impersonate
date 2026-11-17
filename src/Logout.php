<?php
namespace Starbug\Users\Impersonate;

use Starbug\Auth\SessionHandlerInterface;
use Starbug\Routing\Controller;

class Logout extends Controller {
  public function __construct(SessionHandlerInterface $session, $cookiePath = "/") {
    $this->session = $session;
    $this->cookiePath = $cookiePath;
  }
  public function __invoke() {
    if (isset($_COOKIE["iuid"])) {
      setcookie("iuid", null, 0, $this->cookiePath, null, true, true);
    } else {
      $this->session->destroy();
    }
    return $this->redirect("admin/users");
  }
}

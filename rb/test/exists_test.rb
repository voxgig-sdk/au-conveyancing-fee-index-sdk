# AuConveyancingFeeIndex SDK exists test

require "minitest/autorun"
require_relative "../AuConveyancingFeeIndex_sdk"

class ExistsTest < Minitest::Test
  def test_create_test_sdk
    testsdk = AuConveyancingFeeIndexSDK.test(nil, nil)
    assert !testsdk.nil?
  end
end

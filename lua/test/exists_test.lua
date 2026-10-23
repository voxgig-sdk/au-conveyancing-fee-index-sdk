-- AuConveyancingFeeIndex SDK exists test

local sdk = require("au-conveyancing-fee-index_sdk")

describe("AuConveyancingFeeIndexSDK", function()
  it("should create test SDK", function()
    local testsdk = sdk.test(nil, nil)
    assert.is_not_nil(testsdk)
  end)
end)

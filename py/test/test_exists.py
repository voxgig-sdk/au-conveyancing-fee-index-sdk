# AuConveyancingFeeIndex SDK exists test

import pytest
from auconveyancingfeeindex_sdk import AuConveyancingFeeIndexSDK


class TestExists:

    def test_should_create_test_sdk(self):
        testsdk = AuConveyancingFeeIndexSDK.test(None, None)
        assert testsdk is not None

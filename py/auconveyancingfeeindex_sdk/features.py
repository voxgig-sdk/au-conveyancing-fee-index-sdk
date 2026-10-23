# AuConveyancingFeeIndex SDK feature factory

from auconveyancingfeeindex_sdk.feature.base_feature import AuConveyancingFeeIndexBaseFeature
from auconveyancingfeeindex_sdk.feature.ratelimit_feature import AuConveyancingFeeIndexRatelimitFeature
from auconveyancingfeeindex_sdk.feature.retry_feature import AuConveyancingFeeIndexRetryFeature
from auconveyancingfeeindex_sdk.feature.test_feature import AuConveyancingFeeIndexTestFeature
from auconveyancingfeeindex_sdk.feature.timeout_feature import AuConveyancingFeeIndexTimeoutFeature


_FEATURES = {
    "base": lambda: AuConveyancingFeeIndexBaseFeature(),
    "ratelimit": lambda: AuConveyancingFeeIndexRatelimitFeature(),
    "retry": lambda: AuConveyancingFeeIndexRetryFeature(),
    "test": lambda: AuConveyancingFeeIndexTestFeature(),
    "timeout": lambda: AuConveyancingFeeIndexTimeoutFeature(),
}


def _make_feature(name):
    factory = _FEATURES.get(name)
    if factory is not None:
        return factory()
    return _FEATURES["base"]()


# True when this SDK was generated with the named feature class - the
# constructor's tolerance for extend-carried features reads this (an
# active name with no generated class must not become a BaseFeature
# stray when an extend instance carries it).
def _has_feature(name):
    return name in _FEATURES
